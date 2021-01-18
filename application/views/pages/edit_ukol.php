<br />
<br>


    <div id="card"class="card">

        <h1 class="card-title"><u>Editace úkolu</u></h1>


    <br />


    <?php echo form_open("edit/".$data[0]->id); ?>

      <?php $result = $data[0]; ?>
    <div class="form-group">
        <label class="form-label "for="exampleFormControlTextarea1"><h3>Popis:</h3> </label>
        <textarea type="text" name="popis" class="form-control " id="exampleFormControlTextarea1" rows="4" cols="32"required=""><?php echo $result->popis; ?></textarea>
      </div>
    <br />
<!--
      <div id="splneno">
    <select type="select" name="splneno" class="col-lg-12" >
      <option selected disabled value="">Splnění úkolu ANO/NE</option>
      <?php if($result->splněno == "Splněno"): ?>
      <option value="Splněno" selected>Splněno</option>
      <option value="Nesplněno">Nesplněno</option>
    <?php else: ?>
      <option value="Splněno">Splněno</option>
      <option value="Nesplněno" selected>Nesplněno</option>
    <?php endif; ?>
    </select>
    <br />
    </div>
  -->
    <br />
    <?php $date = date("d.m.Y",strtotime($result->konec)); ?>
          <label class="form-label"for="exampleFormControlTextarea2"><h3>Datum: </h3> </label>
          <input type="text" name="konec" value="<?php echo $date; ?>" class="form-text form-control " placeholder="Sem napište datum ve tvaru: YYYY.MM.DD" id="exampleFormControlTextarea2" required=""></input>


    <br / >
    <br />
<div class="row">
  <button id="back_button" class="button button3 btn-danger col-lg-4 col-md-4 col-sm-12"><a style="color:white;" href="<?php echo base_url(); ?>"><i class="fas fa-arrow-left"> Zpět</i></a></button>


  <button id="edit_button"type="submit" class="button button3 btn-primary col-lg-4 col-md-6 col-sm-12" name="submit" value="Submit" required=""><i class="fas fa-plus"></i> Přidat</button>

  </form>


  </div>
</div>


<br />
<br>
