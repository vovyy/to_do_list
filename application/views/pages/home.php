<br />
<br>
<div id="card"class="card">

    <h1 class="card-title"><u>Nový úkol</u></h1>


<br />

  <form name="frm_ukol" method="post" action="<?= base_url() ?>pridat_ukol">


  <div class="form-group">
      <label class="form-label "for="exampleFormControlTextarea1">Popis: </label>
      <textarea type="text" name="popis" class="form-control " placeholder="Sem napište úkol..." id="exampleFormControlTextarea1" rows="4" cols="32"required=""></textarea>
    </div>
  <br />

    <div id="splneno">
    <select type="select" name="splněno" class="col-lg-12" >
    <option selected disabled>Splnění úkolu ANO/NE</option>
    <option value="Ano">Ano</option>
    <option value="Ano">Ne</option>
</select>
<br />
</div>
<br />
        <label class="form-label"for="exampleFormControlTextarea2">Datum: </label>
        <input type="date" name="konec" class="form-text form-control " placeholder="Sem napište datum ve tvaru: YYYY.MM.DD" id="exampleFormControlTextarea2"  required=""></input>


  <br />

<button type="submit" id="submit" class="button btn-warning col-lg-12 col-md-12 col-sm-12" name="submit" value="Submit" required=""><i class="fas fa-plus"></i> Přidat</button>
</form>
</div>
</div>
<br />
<div id="card_2"class="card ">

<div class="card-body">


<div class="column">
    <table id="records" class="table table-striped table-bordered">
        <thead>
            <tr>

                <th><i class="fas fa-pen-fancy"></i> Popis</th>
                <th><i class="fas fa-clock"></i> Konec</th>
                <th><i class="fas fa-running"></i> Stav</th>
                <th><i  class="fas fa-edit"></i> Editovat</th>
                <th><i class="fas fa-trash-alt"></i> Smazat</th>

            </tr>
        </thead>
        <tbody>
            <?php foreach ($form as $row): ?>
                <tr>

                    <td><?= $row->popis ?></td>
                    <td><?= $row->konec ?></td>
                    <td><?= $row->splněno ?></td>
                    <td><a href="<?php echo base_url();?>edit_ukol/<?= $row->id?>"><i class="fas fa-edit"></i></a></td>
                    <td><a href="<?php echo base_url();?>delete/<?= $row->id?>" onclick="return confirm('Opravdu chcete toto pole smazat?')" id="delete_button"><i style="color:red;"class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
  </div>
</div>
</div>
