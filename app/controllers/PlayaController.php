<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PlayaController extends BaseController {

    /**
     * Show the profile for the given user.
     */
    public function verPlaya($id)
    {
        $playa = Beach::find($id);

        return View::make('playa.detalle', array('playa' => $playa));
    }
	
	 public function listaPlayas()
    {
        return View::make('playa.lista');
    }

}