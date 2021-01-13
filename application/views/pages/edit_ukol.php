<br />
<br>


    <div id="card"class="card">

        <h1 class="card-title"><u>Editace úkolu</u></h1>


    <br />


    <?php echo form_open("edit/".$data[0]->id); ?>

      <?php $result = $data[0]; ?>
    <div class="form-group">
        <label class="form-label "for="exampleFormControlTextarea1">Popis: </label>
        <textarea type="text" name="popis" class="form-control " id="exampleFormControlTextarea1" rows="4" cols="32"required=""><?php echo $result->popis; ?></textarea>
      </div>
    <br />

      <div id="splneno">
    <select type="select" name="splneno" class="col-lg-12" >
      <option selected disabled value="">Splnění úkolu ANO/NE</option>
      <?php if($result->splněno == "Ano"): ?>
      <option value="Ano" selected>Ano</option>
      <option value="Ne">Ne</option>
    <?php else: ?>
      <option value="Ano">Ano</option>
      <option value="Ne" selected>Ne</option>
    <?php endif; ?>
    </select>
    <br />
    </div>
    <br />
    <?php $date = date("d.m.Y",strtotime($result->konec)); ?>
          <label class="form-label"for="exampleFormControlTextarea2">Datum: </label>
          <input type="text" name="konec" value="<?php echo $date; ?>" class="form-text form-control " placeholder="Sem napište datum ve tvaru: YYYY.MM.DD" id="exampleFormControlTextarea2" required=""></input>


    <br />
<div class="row">
  <button id="back_button " class="button btn-danger col-lg-6 col-md-6 col-sm-12"><a style="color:white;" href="<?php echo base_url(); ?>"><i class="fas fa-arrow-left"> Zpět</i></a></button>
  <br />

  <button id="edit_button "type="submit" class="button  btn-primary col-lg-6 col-md-6 col-sm-12" name="submit" value="Submit" required=""><i class="fas fa-plus"></i> Přidat</button>

  </form>
  <br />

  </div>
</div>


<br />
<br>
