<?php

namespace App\Http\Controllers;
use App\Models\Media; 
use App\Models\Episode; 
use Illuminate\Http\Request;

class EpisodeController extends Controller
{
    public function showSeasons($id, $season) {    
        $serie = Media::find($id);
        $episodes = Episode::where('serie_id', $id)
                           ->where('season', $season)
                           ->orderBy('number', 'asc') 
                           ->get();
        return view('netflix.episodes', compact('serie', 'episodes', 'season'));
    }
    public function showEpisode($id, $season, $episode) {  
        $serie = Media::find($id);
        $foundEpisode = Episode::where('serie_id', $id)
                           ->where('season', $season)
                           ->where('number', $episode) 
                           ->first();
        return view('netflix.episode', compact('serie', 'foundEpisode', 'season'));
    }
    public function showEpisodeForm($id) {
        $serie = Media::find($id);
        return view('netflix.createEpisodes', compact('serie'));
    }
    public function createEpisode(Request $request)
    {
        $serie = Media::find($request->input('serie_id'));
        $data = [
            'title' => $request->input('title'),
            'number' => $request->input('episode_number'),
            'season' => $request->input('season'),
            'sinopsis' => $request->input('sinopsis'),
            'file' => str_replace('public/', 'storage/', $request->file('file')->store('public/files')),
            'serie_id' => $request->input('serie_id')
        ];
        Episode::create($data);
        return view('netflix.createEpisodes', compact('serie'));
    }

    public function deleteSeason($episodeId)
    {
        $episode = Episode::findOrFail($episodeId);
        
        $episode->delete();

        $serie = Media::find($episodeId);
        $episodes = Episode::where('serie_id', $episodeId)->get();
        return view('netflix.serie', compact('serie', 'episodes'));
    }
}

