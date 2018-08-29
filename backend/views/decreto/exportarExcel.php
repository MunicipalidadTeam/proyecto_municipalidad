<?php

\moonland\phpexcel\Excel::export([
   	'models' => $Model,
      	'columns' => [
          'numeroDecreto',
          'fechaDeEnvio',
          'fechaDecreto',
          'proveedor',
          'monto',
          'cuenta',
          'fechaRecepcion',
          'estado',
        ],
]);
