<div class="container w-100 h-90 bg-white rounded" style="margin-right=1%;margin-left:10px; width:400px">
    <div class="container " style=" width:500px;" >
        <h2 class="font-weight-bold mb-3"style=" font-size:1.4em;color:#51bfd0"> PARAMETRER VOTRE QUESTION</h2>
        
        <form method="post" action="" class=" rounded p-3" style="border:solid 1px #51bfd0;">
            <div class="form-group row">
                <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label m-auto" style="font-size:0.9em;"> Questions </label>
                    <div class="col-sm-10">
                        <input type="text" name="" id="" class="form-control rounded-0" style=" height:70px; box-shadow: 1px 1px #51bfd0; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Nbre de Points </label>
                    <select class="custom-select col-sm-2 rounded-0" style="box-shadow: 1px 1px #51bfd0; background-color:#f5f5f5;">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">3</option>
                        <option value="3">5</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-4 text-secondary font-weight-bold  col-form-label" style="font-size:0.9em;"> Types de réponses </label>
                    <select class="custom-select col-sm-7 rounded-0" style="box-shadow: 1px 1px #51bfd0; background-color:#f5f5f5;">
                        <option selected>Donnez le type de réponse</option>
                        <option value="1">Bouton radio </option>
                        <option value="2">Bouton checkbox</option>
                        <option value="3">Champ de saisie</option>
                    </select>
                    <div class="col-sm-1">
                        <img src=" <?=WEBROOT?>/assets/image/ic-ajout-réponse.png" style="margin-left:-10px;">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-sm-2 text-secondary font-weight-bold col-form-label" style="font-size:0.9em;"> Réponse1 </label>
                    <div class="col-sm-7">
                        <input type="text" name="" id="" class="form-control rounded-0" style="box-shadow: 1px 1px #51bfd0; background-color:#f5f5f5;" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="col-sm-1 m-auto" >
                        <div class="checkbox mt-2" style=" "> 
                            <label ><input type="checkbox" style="width:20px; height:20px;  box-shadow:1px 1px #51bfd0;  " value=""></label>
                        </div>
                    </div>
                    <div class="col-sm-1 m-auto ">
                        <div class="radio mt-2" > 
                            <label ><input type="radio" style="width:20px; height:20px; " name="optradio" ></label>
                        </div>
                    </div>
                    <div class="col-sm-1 mt-1">
                        <img src="<?=WEBROOT?>/assets/image/ic-supprimer.png">
                    </div>
                </div>
                <div class="row " style="margin-top:100px;">
                    <div class="col-sm-9"> </div>
                    <div class="col-sm-3" style="margin-left:-5px;">
                        <button type="submit" class="btn btn-primary rounded-0" style="background-color:#51bfd0; border:none;">Enregistrer</button>
                    </div>
                </div>
        </form>
        </div>
</div>