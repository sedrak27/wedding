<?php

namespace App\Http\Controllers;

use App\Models\Rsvp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RsvpController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|min:3|max:255',
            'attend' => 'required|in:yes,no',
            'guest_count' => 'required_if:attend,yes|nullable|numeric|min:1|max:20',
            'invited_by' => 'required|string|in:sedrak,gohar',
            'desired_song' => 'nullable|string|max:255',
        ], [
            'name.required' => 'Խնդրում ենք լրացնել անունը:',
            'attend.required' => 'Խնդրում ենք նշել մասնակցությունը:',
            'invited_by.required' => 'Խնդրում ենք նշել, թե ում կողմից եք հրավիրված:',
            'guest_count.required_if' => 'Խնդրում ենք նշել հյուրերի քանակը:',
            'guest_count.numeric' => 'Հյուրերի քանակը պետք է լինի թիվ:',
            'guest_count.max' => 'Հյուրերի առավելագույն քանակը 20 է:',
            'guest_count.min' => 'Հյուրերի քանակը պետք է լինի առնվազն 1:',
            'desired_song.max' => 'Երգի անվանումը շատ երկար է:',
        ]);

        // Render passes the real IP in HTTP headers
        $ip = $request->header('True-Client-IP') ?? $request->header('X-Forwarded-For') ?? $request->ip();
        if (str_contains($ip, ',')) {
            $ip = trim(explode(',', $ip)[0]);
        }
        
        $location = 'Անհայտ';
        
        try {
            // Skip location check for localhost
            if ($ip !== '127.0.0.1' && $ip !== '::1') {
                $response = Http::timeout(3)->get("http://ip-api.com/json/{$ip}");
                if ($response->successful() && $response->json('status') === 'success') {
                    $location = $response->json('city') . ', ' . $response->json('country');
                }
            }
        } catch (\Exception $e) {
            // Keep 'Անհայտ' on error
        }

        Rsvp::create([
            'name' => $validated['name'],
            'attend' => $validated['attend'],
            'guest_count' => $validated['attend'] == 'yes' ? $validated['guest_count'] : 0,
            'invited_by' => $validated['invited_by'],
            'ip_address' => $ip,
            'user_agent' => $request->header('User-Agent'),
            'location' => $location,
            'desired_song' => $validated['desired_song'] ?? null,
        ]);

        return response()->json(['message' => 'RSVP saved successfully']);
    }

    public function update(Request $request, Rsvp $rsvp)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'attend' => 'required|in:yes,no',
            'guest_count' => 'required_if:attend,yes|numeric|min:0',
            'invited_by' => 'required|string|in:sedrak,gohar',
            'desired_song' => 'nullable|string|max:255',
        ]);

        $rsvp->update([
            'name' => $validated['name'],
            'attend' => $validated['attend'],
            'guest_count' => $validated['attend'] == 'yes' ? $validated['guest_count'] : 0,
            'invited_by' => $validated['invited_by'],
            'desired_song' => $validated['desired_song'] ?? null,
        ]);

        return back()->with('success', 'Գրառումը հաջողությամբ թարմացվել է:');
    }

    public function admin()
    {
        $rsvps = Rsvp::latest()->get();
        
        // Calculate counts
        $sedrakGuests = Rsvp::where('attend', 'yes')->where('invited_by', 'like', '%sedrak%')->sum('guest_count');
        $goharGuests = Rsvp::where('attend', 'yes')->where('invited_by', 'like', '%gohar%')->sum('guest_count');

        return view('admin', compact('rsvps', 'sedrakGuests', 'goharGuests'));
    }

    public function songs()
    {
        $songs = Rsvp::whereNotNull('desired_song')
                     ->where('desired_song', '!=', '')
                     ->orderBy('created_at', 'desc')
                     ->get(['name', 'desired_song']);
                     
        return view('admin_songs', compact('songs'));
    }

    public function destroy(Rsvp $rsvp)
    {
        $rsvp->delete();
        return back()->with('success', 'Գրառումը ջնջված է:');
    }
}
