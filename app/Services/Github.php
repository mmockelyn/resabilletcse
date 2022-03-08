<?php


namespace App\Services;


use Illuminate\Support\Str;

class Github
{
    public static function latestMasterVersion()
    {
        $gh = \GrahamCampbell\GitHub\Facades\GitHub::repo()->branches('mmockelyn', 'resabilletcse', 'master');

        return $gh['name'].'-'.Str::limit($gh['commit']['sha'], 5, '');
    }

    public static function latestDeployVersion()
    {
        $gh = \GrahamCampbell\GitHub\Facades\GitHub::repo()->releases()->latest('mmockelyn', 'resabilletcse');

        return $gh['tag_name'];
    }

    public static function GetWorkflows()
    {
        $gh = \GrahamCampbell\GitHub\Facades\GitHub::repo()->workflowRuns()->all('mmockelyn', 'resabilletcse');

        return $gh;
    }
}
