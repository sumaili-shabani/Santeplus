<div class="col-md-12">
	<form class="row" method="post" action="<?php echo(base_url()) ?>admin/operation_news/ajout">

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

        <div class="form-group col-md-12">
			<label>Apropos de nous santé plus</label>
			<textarea class="form-control textarea" name="apropos_text">
				
			</textarea>
		</div>

		 <div class="form-group col-md-12">
			<label>Faire un don</label>
			<textarea class="form-control textarea" name="don">
				
			</textarea>
		</div>


		<div class="form-group col-md-12">
			<label>Ce que nous faison</label>
			<textarea class="form-control textarea" name="apropos">
				
			</textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Financement</label>
			<textarea class="form-control textarea" name="financement">
				
			</textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Carrière</label>
			<textarea class="form-control textarea" name="carierre">
				
			</textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Partenariat</label>
			<textarea class="form-control textarea" name="partenariat">
				
			</textarea>
		</div>

		<div class="form-group col-md-12">
			<label>Structure de gestion</label>
			<textarea class="form-control textarea" name="structure">
				
			</textarea>
		</div>

		<div class="form-group col-md-12">
			<button type="submit" name="valider" class="btn btn-hub pull-right">
				<i class="fa fa-save mr-1"></i> Enregistrer
			</button>
		</div>

		
		
	</form>
</div>