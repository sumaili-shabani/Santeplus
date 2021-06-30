<div class="col-md-12">
	<form class="row" method="post" enctype="multipart/form-data" action="<?php echo(base_url()) ?>admin/operation_rapport/ajout" >

		<div class="col-md-12 mb-2">
			<div class="text-center" align="center">
        		<?php
                if($this->session->flashdata('message'))
                {
                    echo '
                    <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">x</button>
                        '.$this->session->flashdata("message").'
                    </div>
                    ';
                }
                elseif ($this->session->flashdata('message2')) {
                  echo '
                    <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert">x</button>
                        '.$this->session->flashdata("message2").'
                    </div>
                    ';
                }
                else{

                }
                ?>
        	</div>
        </div>

        <div class="col-md-12">
        	<a href="<?= base_url() ?>admin/rapport" class="text-primary pull-right"><i class="fa fa-home mr-1"></i> retourner</a>
        </div>

		<div class="form-group col-md-12">
			<label>Saisissez  le titre du rapport</label>
			<input type="text" name="titre" id="titre" class="form-control" placeholder="le titre du rapport" required="">
		</div>

		<div class="form-group col-md-6">
			<label>Selectionner l'année</label>
			<select class="form-control" name="annee" id="annee">
				<option value="">Veillez Selectionner l'année</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
				<option value="2022">2022</option>
				<option value="2023">2023</option>
			</select>
		</div>

		<div class="form-group col-md-5">
			<label>Atachez un fiichier de rapport</label>
			<input type="file" name="user_image" id="user_image" class="form-control-file" placeholder="attacher le fichier pdf">
			
		</div>

		<div class="form-group col-md-1">
			
			<div class="text-info pull-left rapport_show">
				<i class="fa fa-file-o" style="font-size: 40px; margin-top: 10px;"></i>
			</div>
		</div>

		<div class="form-group col-md-12">
			<label>Saisissez la description du rapport</label>
			<textarea class="form-control textarea" name="description">
				
			</textarea>
		</div>


		<div class="form-group col-md-12">
			<button type="submit" name="valider" class="btn btn-success pull-right">
				<i class="fa fa-save mr-1"></i> Enregistrer
			</button>
		</div>

		
		
	</form>
</div>