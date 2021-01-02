<br>
<br>
<br>

<div class="container mt-4">
    <?php

    
    $funnel = file_get_contents("https://api.ifixitmor.com/public/api-softmor/funnel/all");
    $funnel = json_decode($funnel, true);

    // preArray($funnel);

    ?>
  
    <div class="row">
        <div class="col-12">
            <table class="table tablaPedidos table-light tablas table-bordered table-striped dt-responsive">
                <thead class="thead-light">
                    <tr>
                        <th>#ID</th>
                        <th>Nombre</th>
                        <th>Correo</th>
                        <th>Número</th>
                        <th>Fecha de registro</th>
                        <th>Nota</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($funnel as $key => $fnl) :
                    ?>
                        <tr>
                            <td>
                                <?php echo $fnl['id'] ?>
                            </td>
                            <td>
                                <?php echo $fnl['nombre'] ?>
                            </td>
                            <td>
                                <?php echo $fnl['correo'] ?>
                            </td>
                            <td>
                                <a href="https://wa.me/<?php echo $fnl['numero'] ?>" target="framename" class="btn btn-sm btn-success"><i class="fab fa-whatsapp"></i></a>
                                <a href="tel:<?php echo $fnl['numero'] ?>" target="framename" class="btn btn-sm btn-dark"><i class="fas fa-phone"></i></a>
                                <a href=""></a>
                                <?php echo $fnl['numero'] ?>
                            </td>
                            <td>
                                <?php echo $fnl['fecha'] ?>
                            </td>
                            <td>
                                <?php echo $fnl['Estado'] ?>
                            </td>
                            <td>

                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>