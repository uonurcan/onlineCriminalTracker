                   <div class="card shadow">
                       <div class="card-body"><button class="btn btn-primary" type="button" data-bs-target="#addModal" data-bs-toggle="modal"><i class="fa fa-plus"></i>&nbsp;Add</button>
                           <div class="table-responsive table mt-2" id="dataTable" role="grid" aria-describedby="dataTable_info">
                               <table class="table my-0" id="dataTable">
                                   <thead>
                                       <tr>
                                           <th class="px100">Full Name</th>
                                           <th class="px300"><strong>Reporter</strong><br></th>
                                           <th class="px300">Details</th>
                                           <th class="px100">Age</th>
                                           <th class="px200">Report Date</th>
                                           <th class="px200">Criminal Photo</th>
                                           <th class="px200">Contact Address</th>
                                           <th class="px200">Contact Phone</th>
                                           <th class="px100">Publishing</th>
                                           <th class="px100">Actions</th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       <?php
                                        // List All items with bootsrap card template
                                        while ($rec = $r->fetch_assoc()) {
                                        ?>
                                           <tr>
                                               <td class="px300">
                                                   <img class="rounded-circle me-2" width="30" height="30" src="images/<?php echo $rec[$slc . '_photos']; ?>">
                                                   <span> <?php echo $rec[$slc . '_name']; ?></span>
                                               </td>
                                               <td class="px300"><?php echo $rec[$slc . '_reporter']; ?></td>
                                               <td class="d-xl-flex justify-content-xl-start px300">
                                                   <textarea class="txtareaintable" readonly=""><?php echo $rec[$slc . '_details']; ?></textarea>
                                               </td>
                                               <td class="px100"><?php echo $rec[$slc . '_age']; ?></td>

                                               <td class="px200"><span class="badge bg-danger" style="font-size: 15px;">
                                                       <?php echo $rec[$slc . '_date']; ?></span></td>

                                               <td class="px200"><?php echo $rec[$slc . '_photos']; ?></td>
                                               <td class="px200">
                                                   <textarea class="txtareaintable" readonly=""><?php echo $rec[$slc . '_contact']; ?></textarea>
                                               </td>
                                               <td class="px200"><?php echo $rec[$slc . "_phone"]; ?></td>

                                               <td class="px100"><input type="checkbox" class="checkk" disabled="" <?php if ($rec[$slc . '_show'] == '1') {
                                                                                                                        echo 'checked=""';
                                                                                                                    } ?>></td>
                                               <td class="px100">
                                                   <div class="btn-group" role="group">

                                                       <button id="editmodal" hidden data-bs-target="#editModal" data-bs-toggle="modal" role="button">Ggggg</button>
                                                       <!--edit page -->
                                                       <a href="/updatepeople.php?id=<?php echo $rec[$slc . "_id"] . '&slc=' . $slc; ?>" class="btn btn-success" type="submit">
                                                           <i class="fa fa-pencil"></i></a>


                                                       <button id="deletemodal" hidden data-bs-target="#deleteCheck" data-bs-toggle="modal" role="button">Ggggg</button>
                                                       <!-- DELETE BUTTON SENDİNG USER ID TO JAVASCRİPT -->
                                                       <a onclick="delbut(<?php echo $rec[$slc . '_id'] ?>)" class="btn btn-danger" type="submit">
                                                           <i class="fa fa-trash-o"></i></a>
                                                   </div>
                                               </td>
                                           </tr>
                                       <?php } ?>

                                       <script type="text/javascript">
                                           // FOR USERID WE SET COOKIE FOR SERVERSIDE 
                                           function delbut(id) {

                                               var button = document.getElementById('deletemodal'); // for modal page open we are using hidden button to open bootsrap modal
                                               button.click();
                                               document.cookie = "userid=" + id;
                                           }
                                       </script>
                                       <!-- end while -->
                                   </tbody>
                               </table>
                           </div>
                       </div>
                   </div>