<?php
namespace App\Repositories;

use App\Models\Questionnaire_answer;

class InsertRepository implements InsertRepositoryInterface
{
    protected $Questionair;

    public function __construct(){
		    $this->Questionair = new Questionnaire_answer();
	  }

    public function insertForm($data){
      //dd($data);
      $questionair = new Questionnaire_answer();
      $questionair->company = array_get($data,'company');
      $questionair->number = array_get($data,'number');
      $questionair->village = array_get($data,'village');
      $questionair->building = array_get($data,'building');
      $questionair->floor = array_get($data,'floor');
      $questionair->road = array_get($data,'road');
      $questionair->subarea = array_get($data,'subarea');
      $questionair->area = array_get($data,'area');
      $questionair->province = array_get($data,'province');
      $questionair->zip = array_get($data,'zip');
      $questionair->tel = array_get($data,'tel');
      $questionair->email = array_get($data,'email');
      $questionair->title = array_get($data,'title');
      $questionair->name = array_get($data,'name');
      $questionair->surname = array_get($data,'surname');
      $questionair->section = array_get($data,'section');
      $questionair->position = array_get($data,'position');
      $questionair->bscit = array_get($data,'bscit');
      $questionair->bsccs = array_get($data,'bsccs');
      $questionair->mscit = array_get($data,'mscit');
      $questionair->msccs = array_get($data,'msccs');
      $questionair->mscse = array_get($data,'mscse');
      $questionair->mscbis = array_get($data,'mscbis');
      $questionair->reason1 = array_get($data,'reason1');
      $questionair->reason2 = array_get($data,'reason2');
      $questionair->reason3 = array_get($data,'reason3');
      $questionair->reason4 = array_get($data,'reason4');
      $questionair->reason5 = array_get($data,'reason5');
      $questionair->reason6 = array_get($data,'reason6');
      $questionair->reason7 = array_get($data,'reason7');
      $questionair->reason8 = array_get($data,'reason8');
      $questionair->reason91 = array_get($data,'reason91');
      $questionair->reason92 = array_get($data,'reason92');
      $questionair->reason93 = array_get($data,'reason93');
      $questionair->reason94 = array_get($data,'reason94');
      $questionair->reason95 = array_get($data,'reason95');
      $questionair->reason96 = array_get($data,'reason96');
      $questionair->reason97 = array_get($data,'reason97');
      $questionair->reason97add = array_get($data,'reason97add');
      $questionair->reason10 = array_get($data,'reason10');
      $questionair->reason10add = array_get($data,'reason10add');
      $questionair->want1 = array_get($data,'want1');
      $questionair->want1add = array_get($data,'want1add');
      $questionair->want2 = array_get($data,'want2');
      $questionair->want3 = array_get($data,'want3');
      $questionair->want3add = array_get($data,'want3add');
      $questionair->want4 = array_get($data,'want4');
      $questionair->want5 = array_get($data,'want5');
      $questionair->want6 = array_get($data,'want6');
      $questionair->want7 = array_get($data,'want7');
      $questionair->want8 = array_get($data,'want8');
      $questionair->want9 = array_get($data,'want9');
      $questionair->want10 = array_get($data,'want10');
      $questionair->want11 = array_get($data,'want11');
      $questionair->want12 = array_get($data,'want12');
      $questionair->want12add = array_get($data,'want12add');
      $questionair->it1 = array_get($data,'r1it');
      $questionair->it2 = array_get($data,'r2it');
      $questionair->it3 = array_get($data,'r3it');
      $questionair->it4 = array_get($data,'r4it');
      $questionair->it5 = array_get($data,'r5it');
      $questionair->it6 = array_get($data,'r6it');
      $questionair->it7 = array_get($data,'r7it');
      $questionair->it8 = array_get($data,'r8it');
      $questionair->it9 = array_get($data,'r9it');
      $questionair->cs1 = array_get($data,'r1cs');
      $questionair->cs2 = array_get($data,'r2cs');
      $questionair->cs3 = array_get($data,'r3cs');
      $questionair->cs4 = array_get($data,'r4cs');
      $questionair->cs5 = array_get($data,'r5cs');
      $questionair->cs6 = array_get($data,'r6cs');
      $questionair->cs7 = array_get($data,'r7cs');
      $questionair->cs8 = array_get($data,'r8cs');
      $questionair->cs9 = array_get($data,'r9cs');
      $questionair->s1it = array_get($data,'s1it');
      $questionair->s1cs = array_get($data,'s1cs');
      $questionair->s2it = array_get($data,'s2it');
      $questionair->s2cs = array_get($data,'s2cs');
      $questionair->s3it = array_get($data,'s3it');
      $questionair->s3cs = array_get($data,'s3cs');
      $questionair->w1it = array_get($data,'w1it');
      $questionair->w1cs = array_get($data,'w1cs');
      $questionair->w2it = array_get($data,'w2it');
      $questionair->w2cs = array_get($data,'w2cs');
      $questionair->w3it = array_get($data,'w3it');
      $questionair->w3cs = array_get($data,'w3cs');
      $questionair->im1it = array_get($data,'im1it');
      $questionair->im2it = array_get($data,'im2it');
      $questionair->im3it = array_get($data,'im3it');
      $questionair->im1cs = array_get($data,'im1cs');
      $questionair->im2cs = array_get($data,'im2cs');
      $questionair->im3cs = array_get($data,'im3cs');
      $questionair->su1it = array_get($data,'su1it');
      $questionair->su2it = array_get($data,'su2it');
      $questionair->su3it = array_get($data,'su3it');
      $questionair->su1cs = array_get($data,'su1cs');
      $questionair->su2cs = array_get($data,'su2cs');
      $questionair->su3cs = array_get($data,'su3cs');
      $questionair->save();
    }

}
