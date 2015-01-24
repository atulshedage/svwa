<?php
require_once 'connection.php';

function dbQuery($query, $show_errors=true, $all_results=true, $show_output=true) {
    if ($show_errors)
        error_reporting(E_ALL);
    else
        error_reporting(E_PARSE);
    // Connect to the MySQL database management system
    ?>
    <html>
    <head>
        <title>SQL Injection</title>
        <style>body {
                font-family: sans-serif;
                margin: 50px;
            }

            h1 {
                text-align: center;
            }

            .outtie {
                margin: 0 auto;
                position: relative;
                width: 800px;
            }

            .innie {
                height: 300px;
                overflow-y: auto;
                position: relative;
                width: 100%;
            }

            table, .clone {
                border-collapse: collapse;
                display: table;
                width: 100%;
            }

            th, td {
                border: 1px solid #ccc;
                padding: 5px;
                text-align: left;
            }

            th {
                background: #ccc;
                border-color: #fff;
            }

            tbody tr:first-child td:first-child,
            .clone th:first-child {
                width: 35%;
            }

            tbody tr:first-child td:last-child,
            .clone th:last-child {
                width: 10%;
            }

            .clone,
            .clone tr {
                width: 100%;
            }</style>
    </head>
    <body>
    <?php

    $result = mysql_query($query);

    $row = @mysql_numrows($result);

    if (!$show_output)
        exit(1);

                if($row > 0) {
                    $i = 0;
                    while ($i < $row) {
                        print "<tr>";
                        $result_content = mysql_result($result, $i, 'username');
                        $result_from = mysql_result($result, $i, 'password');
                        echo $result_from.'<br/>'.$result_content.'<br/><br/>';
                        $i++;
                        print "</tr>\n";
                        if (!$all_results)
                            break;
                    }
                }
                ?>
                </tbody>
            </table>
        </div>
    </div>

    </body>
    </html>

<?php    }
?>
