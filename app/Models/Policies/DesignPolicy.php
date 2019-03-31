<?php

namespace App\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use App\Models\Designer;
use App\Models\Design;

class DesignPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the designer can view the design.
     *
     * @param  \App\Models\Designer  $designer
     * @param  \App\Models\Design  $design
     * @return mixed
     */
    public function view(Designer $designer, Design $design)
    {
        //
    }

    /**
     * Determine whether the designer can create designs.
     *
     * @param  \App\Models\Designer  $designer
     * @return mixed
     */
    public function create(Designer $designer)
    {
        //
    }

    /**
     * Determine whether the designer can update the design.
     *
     * @param  \App\Models\Designer  $designer
     * @param  \App\Models\Design  $design
     * @return mixed
     */
    public function update(Designer $designer, Design $design)
    {
        if (empty($design->designer_id)) {
            return true;
        }

        return $designer->id === $design->designer_id;
    }

    /**
     * Determine whether the designer can delete the design.
     *
     * @param  \App\Models\Designer  $designer
     * @param  \App\Models\Design  $design
     * @return mixed
     */
    public function delete(Designer $designer, Design $design)
    {
        //
    }

    /**
     * Determine whether the designer can restore the design.
     *
     * @param  \App\Models\Designer  $designer
     * @param  \App\Models\Design  $design
     * @return mixed
     */
    public function restore(Designer $designer, Design $design)
    {
        //
    }

    /**
     * Determine whether the designer can permanently delete the design.
     *
     * @param  \App\Models\Designer  $designer
     * @param  \App\Models\Design  $design
     * @return mixed
     */
    public function forceDelete(Designer $designer, Design $design)
    {
        //
    }
}
