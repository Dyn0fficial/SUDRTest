<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;

use App\Models\Papers;

use DB;

class StatsController extends Controller
{
    public function stats_weekly()
    {
        $SDW = Carbon::now()->startOfWeek()->toDateString();
        $LDW = Carbon::now()->endOfWeek()->toDateString();
       
    //  $term = $request->term;

        $results_weekly = DB::table('papers')->Where('College', 'LIKE','%'. 'CCS'. '%')
      
            ->select(DB::raw('COUNT(created_at) as count'))
            ->whereBetween(DB::raw('DATE(created_at)'), [$SDW, $LDW])
            ->value('count');
        
            return $results_weekly;
    }

    public function stats_monthly()
    {
        $SDM = Carbon::now()->startOfMonth()->toDateString();
        $LDM = Carbon::now()->endOfMonth()->toDateString();

        $results_monthly = DB::table('papers')
            ->select(DB::raw('COUNT(created_at) as count'))
            ->whereBetween(DB::raw('DATE(created_at)'), [$SDM, $LDM])
            ->value('count');
        
            return $results_monthly;
    }

    public function stats_yearly()
    {
        $SDY = Carbon::now()->startOfYear()->toDateString();
        $LDY = Carbon::now()->endOfYear()->toDateString();

        $results_yearly = DB::table('papers')
            ->select(DB::raw('COUNT(created_at) as count'))
            ->whereBetween(DB::raw('DATE(created_at)'), [$SDY, $LDY])
            ->value('count');
        
            return $results_yearly;
    }

    public function stats_Year()
    {
       
        $results_yearly = DB::table('papers')
            ->select(DB::raw('COUNT(created_at) as count'))
            ->whereBetween(DB::raw('DATE(created_at)'), [$SDY, $LDY])
            ->value('count');
        
            return $results_yearly;
    }
}