<!DOCTYPE html>
<html>
  <head>
    <title>KIT202 Tutorial 6: PHP</title>
    <meta charset="utf-8">
    <style>
      li {
        margin: 10px 0;
      }
      .answer {
        width: 50%;
        min-height: 1em;
        color: blue;
        padding: 2px;
        border: 1px solid black;
      }
    </style>
  </head>
  <body>
    <h1>KIT202 Tutorial 6: PHP</h1>
    <p>Edit this file and add PHP code to produce answers in the boxes below:</p>
    <ul>
      <li>
        Activity 2, Task 1:
        <div class="answer">
        <?php
        // Task 1. Write your PHP code here
            $gumtreeavg = (57 + 112 + 56 + 68) / 4;
            $kangaroosavg = (64 + 77 + 60 + 113) / 4;

            $answer = '';

            if ( $gumtreeavg > $kangaroosavg ) {
              $answer = 'Gumtrees Win';
            } elseif ( $gumtreeavg < $kangaroosavg ) {
              $answer = 'Kangaroos Win';
            } elseif ( $gumtreeavg === $kangaroosavg ) {
              $answer = 'Both Win';
            }

            echo $answer;
        ?>
        </div>
      </li>
      <li>
        Activity 2, Task 2:
        <div class="answer">
        <?php

          // Task 2. Write your PHP code here

          function calcTax( $income ) {
            $taxRate = 0.35;

            if ( $income > 75000 ) {
              $taxRate = 0.40;
            }

            if ( $income > 100000 ) {
              $taxRate = 0.45;
            }

            $taxAmount = $income * $taxRate;
            return $taxAmount;
          }

          $taxableIncomes = [62000, 40000, 58000, 78500, 66000, 82500, 100500, 109000, 132000, 165000];
          $taxes = [];
          $netIncomes = [];

          foreach ( (array) $taxableIncomes as $income ) {
            array_push($taxes, calcTax($income));
            array_push($netIncomes, $income - calcTax($income));
          }
          
          printf('%d, %d', $taxes[3], $netIncomes[3]);
        ?>
        </div>
      </li>
    </ul>
  </body>
</html>
