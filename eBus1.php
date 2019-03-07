<?php
session_start();
$totalValue = "";
$_SESSION['txtTotal'] = $totalValue;
?>
<!DOCTYPE>
<html lang="en" xmlns="http.//ww.w3.org/1999/xhtml">
    <head>
        <meta charset="utf-8" />
        <style>
            body{
                background-size: 325%
            }
        </style>
        <title>EBusiness 1</title>
        <link rel="stylesheet" href="style.css" type="text/css" />
       
    </head>
   
    <body background="blue2.png">
        <div class="form">
            <form name="intCalc" method="post" action="ebus2.php">
                <h1>Please Choose a Consulting Service</h1>
                <hr />
                <center>
                    <table cellspacing="10">
                        <tr>
                            <td><b>Consulting Service</b></td>
                        </tr>
                        <tr>
                            <td>Blockchain @ $1000</td>
                            <td><input type="radio" id="Blockchain" name="rdoGroup" value="1000" /></td>
                        </tr>
                        <tr>
                            <td>Autonomous Things(Robots) @ $2000</td>
                            <td><input type="radio" id="AutonomousThings" name="rdoGroup" value="2000" /></td>
                        </tr>
                            <tr>
                            <td>Immersive Experience @ $3000</td>
                            <td><input type="radio" id="ImmersiveExperience" name="rdoGroup" value="3000" /></td>
                        </tr>
                    </table>
                </center>
                <br />
                <center><table cellspacing="10">
                        <tr>
                            <td>Sub Total</td>
                            <td><input type="text" id="txtSubTot" name="txtSub" readonly /></td>
                        </tr>
                        <tr><td>-Discount @10%</td>
                            <td><input type="text" id="txtDisc" name="txtDisc" readonly/>   </td>
                        </tr>
                        <tr>
                            <td>+VAT @20%</td>
                            <td><input type="text" id="txtVat" name="txtVat" readonly</td>
                        </tr>
                        <tr>
                            <td>Total</td>
                            <td><input type="text" id="txtTotal" name="txtTotal" value="" readonly</td>
                        </tr>
                        </table>
                </center>
          
            <center>
                <input type="button" name="btnCalc" id="btnCalc" onclick="calcSub()" value="Calculate"/>
                <input type="button" name="btnClear" id="btnClear" onclick="AmountClear()" value="Clear"/>
                <input type="submit" name="btnProceed" id="btnProceed" onclick="" value="Proceed"/>
            </center>
           
            </form>
        </div>
        <script type="text/javascript">
            function calcSub() {
                //Assigning variablesto the values
                var subAmount = parseFloat(document.getElementById('txtSubTot').value);
                var Blockchain = parseFloat(document.getElementById('Blockchain').value);
                var AutonomousThings = parseFloat(document.getElementById('AutonomousThings').value);
                var ImmersiveExperience = parseFloat(document.getElementById('ImmersiveExperience').value);
               
                // If radio buttons are clicked, values are assigned
                if (document.getElementById("Blockchain").checked) {
                    document.intCalc.txtSubTot.value = Blockchain;
                    subAmount = Blockchain;
                    calculation(subAmount);
                }
                else if (document.getElementById("AutonomousThings").checked) {
                    document.intCalc.txtSubTot.value = AutonomousThings;
                    subAmount = AutonomousThings;
                    calculation(subAmount);
                }
                else if (document.getElementById("ImmersiveExperience").checked) {
                    document.intCalc.txtSubTot.value = ImmersiveExperience;
                    subAmount = ImmersiveExperience;
                    calculation(subAmount);
                }
            }
            //function for calculating the values
            function calculation(parmSTotal) {
                var subTotal = parseFloat(parmSTotal);
                var discCalc = parseFloat(subTotal * .10);
                var vatCalc = parseFloat(subTotal * .20);
                var total = parseFloat(subTotal - discCalc + vatCalc);
               
                //Instering them into the correct feilds
                document.intCalc.txtDisc.value = discCalc;
                document.intCalc.txtVat.value = vatCalc;
                document.intCalc.txtTotal.value = total;
            }
            function AmountClear() {
                document.getElementById("txtSubTot").value="";
                document.getElementById("txtDisc").value="";
                document.getElementById("txtVat").value="";
                document.getElementById("txtTotal").value="";
            }
            </script>
    </body>
</html>