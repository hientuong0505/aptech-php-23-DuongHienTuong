  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <title>Document</title>
  </head>

  <body>

      <?php

        $users = [
            [
                "name" => "Dương Hiễn Tường",
                "email" => "tuongdeptrai@gmail.com",
                "phone" => "(01254) 375712",
                "dob" => "05/05/2000",
                "country" => "Việt Nam",
                "city" => "Đà Nẵng"
            ],
            [
                "name" => "Chancellor Mcclure",
                "email" => "tellus@Donecconsectetuermauris.org",
                "phone" => "070 3535 2825",
                "dob" => "06/10/1999",
                "country" => "Philippines",
                "city" => "San Rafael"
            ],
            [
                "name" => "Jonah Benton",
                "email" => "bentodev@gmail.com",
                "phone" => "0845 46 46",
                "dob" => "16/04/1998",
                "country" => "Romania",
                "city" => "Casalbuono"
            ],
            [
                "name" => "Kheflia",
                "email" => "khef123v@gmail.com",
                "phone" => "0845 46 46",
                "dob" => "20/04/1997",
                "country" => "UAE",
                "city" => "Dubai"
            ]
        ];
        ?>

      <table class="table table-hover">
          <thead class="thead-dark">
              <th>#</th>
              <th>Name</th>
              <th>Email</th>
          </thead>
          <tbody>
              <?php
                for ($i = 0; $i < count($users); $i++) {
                ?>
                  <tr>
                      <td>
                          <?php
                            echo $i + 1;
                            ?>
                      </td>
                      <td>
                          <?php
                            echo $users[$i]["name"];
                            ?>
                      </td>
                      <td>
                          <?php
                            echo $users[$i]["email"];
                            ?>
                      </td>
                  </tr>
              <?php
                }
                ?>
          </tbody>
      </table>
  </body>

  </html>