
<?php include("ajax.php"); ?>
<br />
<br>
<div id="card"class="card">

    <h1 class="card-title display-4"><u>Nový úkol</u></h1>


<br />

  <form name="frm_ukol" method="post" action="<?= base_url() ?>pridat_ukol">


  <div class="form-group">
      <label class="form-label "for="exampleFormControlTextarea1"><h3>Popis:</h3> </label>
      <textarea type="text" name="popis" class="form-control " placeholder="Sem napište úkol..." id="exampleFormControlTextarea1" rows="4" cols="32"required=""></textarea>
    </div>
  <br />
<!--
    <div id="splneno">
    <select type="select" name="splněno" class="col-lg-12" >
    <option selected disabled>Splnění úkolu ANO/NE</option>
    <option value="Splněno">Splněno</option>
    <option value="Nesplněno">Nesplněno</option>
</select>
<br />
</div>
-->
<br />
        <label class="form-label"for="exampleFormControlTextarea2"><h3>Datum:</h3> </label>
        <input type="date" name="konec" class="form-text form-control " placeholder="Sem napište datum ve tvaru: YYYY.MM.DD" id="exampleFormControlTextarea2"  required=""></input>


  <br />

<button type="submit" id="submit" class="button button3 btn-warning btn-block col-lg-12 col-md-12 col-sm-12" name="submit" value="Submit" required=""><i class="fas fa-plus"></i> Přidat</button>
</form>
</div>
</div>
<br />

<script>
  function chkboxcolorrow(result)
  {
    if(result.checked)
    {
        result.parentNode.parentNode.style.backgroundColor = "lightGreen";
        result.parentNode.parentNode.style.color = "Black";
    }
    else {
      result.parentNode.parentNode.style.backgroundColor = "white";
      result.parentNode.parentNode.style.color = "";
    }
  }
</script>
<div id="card_2"class="card ">

<div class="card-body">


<div class="column">
    <table id="records" class="table table-striped table-bordered" style="padding-top:5%;">

        <thead>
            <tr>

                <th><i class="fas fa-pen-fancy"></i> Popis</th>
                <th><i class="fas fa-clock"></i> Konec</th>

                <th><i  class="fas fa-edit"></i> Editovat</th>
                <th><i class="fas fa-trash-alt"></i> Smazat</th>
                <th><i class="fas fa-check"></i> Splněno</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($form as $row): ?>
                <tr <?php if($row->splněno == "splněno"): ?> class="active" <?php endif; ?>>

                    <td><?= $row->popis ?></td>
                    <td><?= $row->konec ?></td>
                    <td><a href="<?php echo base_url();?>edit_ukol/<?= $row->id?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="<?php echo base_url();?>delete/<?= $row->id?>" onclick="return confirm('Opravdu chcete toto pole smazat?')" id="delete_button"><i style="color:red;"class="fas fa-trash-alt"></i></a></td>

                    <form  method="post" name="frmcheck">
                        <td><input type="checkbox" name="splněno" class="box checkbox-done checkbox-undone" id="box-1" data-target="<?php echo $row->id; ?>" onclick="return confirm('Opravdu? Tuto akci již nelze vzít zpět')"  value="splněno" <?php if($row->splněno == "splněno"): ?> checked <?php endif; ?> /></td>


                    </form>




                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>
  </div>
</div>
</div>
