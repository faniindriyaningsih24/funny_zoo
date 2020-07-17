<div class="box-body">
                  <label>ID Status</label>
                  <select name= "kd_status" class="form-control">
                 <option value="">---------Pilih Status---------</option>
                      <?php
                      $aa="select * from web_status";
                      $sbb=mysqli_query($koneksi,$aa);
                      while($opt=mysqli_fetch_object($sbb))  
                      {
                      ?>
                        <option value="<?php echo $opt->kd_status;?>"> <?php echo $opt->nama_status;?></option>
                      <?php
                      }
                      ?>
                    </select>
                      </div>  