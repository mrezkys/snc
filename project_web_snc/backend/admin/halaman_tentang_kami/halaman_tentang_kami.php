<?php
$query = mysqli_query($conn,"SELECT * FROM tentang_kami ORDER BY id DESC");
?>
<div class="container">
  <h2>Tentang Kami</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label>Judul:</label>
      <input type="text" class="form-control" name="judul">
    </div>
    <div class="form-group">
  <label for="comment">Isi:</label>
  <textarea class="form-control" rows="5" id="comment" name="isi"></textarea>
</div>    
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<br>
<br>
    <table border="1" cellpadding="0" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>ISI</th>
        </tr>
        <?php if(mysqli_num_rows($query)>0){ ?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $no ?></td>
            <td><?php echo $data["judul"];?></td>
            <td><?php echo $data["isi"];?></td>
            <td>

        </tr>
        <?php $no++; } ?>
        <?php } ?>
    </table>
