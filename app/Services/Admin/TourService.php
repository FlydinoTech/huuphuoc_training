<?php
namespace App\Services\Admin;

use App\Models\Tour;
use Illuminate\Support\Facades\Storage;

class TourService
{

    public function __construct(Tour $tour)
    {
        $this->tour = $tour;
    }

    public function update($inputs, Tour $tour)
    {
        $isDelete = false;

        if (!empty($inputs['file'])) {
            $folder = detectFolderByModel($tour);
            $inputs['file'] = saveImgByFileUpload($inputs['file'], $folder);

            if (!empty($tour->picture)) {
                Storage::delete($folder . $tour->picture);
                $isDelete = true;
            }
        }

        if (!$isDelete && empty($inputs['file']) && !empty($tour->picture)) {
            $inputs['picture'] = null;
        }

        $tour->update($inputs);

        return $tour;
    }
}