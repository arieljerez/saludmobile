<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacientHealtInsuranceController extends Controller
{
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
      $healt_insurances = array();

      $healt_insurance = new \stdClass();
      $healt_insurance->insurance = "Medicus";
      $healt_insurance->plan = "Medicus 310";
      $healt_insurance->type_recruitment = "Laboral";
      $healt_insurance->affiliate_number = "8030564646";

      $healt_insurances[] = $healt_insurance;

      $healt_insurance = new \stdClass();
      $healt_insurance->insurance = "PRIVADO";
      $healt_insurance->plan = "PRIVADO VIP";
      $healt_insurance->type_recruitment = "PRIVADO";
      $healt_insurance->affiliate_number = "11100000001";

      $healt_insurances[] = $healt_insurance;

      $healt_insurance = new \stdClass();
      $healt_insurance->insurance = "Swiss Medical (SMG)";
      $healt_insurance->plan = "Plan 310";
      $healt_insurance->type_recruitment = "Laboral";
      $healt_insurance->affiliate_number = "9030964646";

      $healt_insurances[] = $healt_insurance;

      return view('pacient_health_insurance')->with(compact('healt_insurances'));
  }

  public function create()
  {
      return view('pacient_health_insurance_create');
  }

  /**
   * Store a new healt insurance.
   *
   * @param  Request  $request
   * @return Response
   */
  public function store(Request $request)
  {
      return redirect(route('pacient.healt_insurance.list'));
  }


}
