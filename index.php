<html>
<head>
	<link href="assets/vendors/bootstrap/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
	<link href="assets/vendors/bootstrap/css/bootstrapogi.css" rel="stylesheet" id="bootstrap-css">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>The Holy Grail</title>
</head>
<body onload="loadAnim(); ccgen();" style="background-color:#343c4a;">

<!-- Header Form -->
<div id="form_header" name="form_header" style="margin-top: 20px; display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card-body" style="background-color:#404552";>
				<div class="card">
					<center>
						<img src="assets/img/logo.png" alt="The Holy Grail" width="120" height="120">
						<h3 style="margin-top: 20px">The Holy Grail</h3>
						<div style="margin-top: 20px" class="row">
							<div class="col-md-2"></div>
							<div class="col-md-4">
								<button style="margin-top: 10px" class="btn btn-block btn-pogi" onclick="checker_clk()">CHECKER</button>
							</div>
							<div class="col-md-4">
								<button style="margin-top: 10px" class="btn btn-block btn-pogi" onclick="generator_clk()">GENERATOR</button>
							</div>
						</div>
						<hr>
						<div>
							ᴄᴠᴠ: <span id="cLive" style="margin-left: 10px; margin-right: 10px;" class="text text-light">0</span>
							ᴄᴄɴ: <span id="cWarn" style="margin-left: 10px; margin-right: 10px;" class="text text-light">0</span>
							ᴅᴇᴀᴅ: <span id="cDie" style="margin-left: 10px; margin-right: 10px;" class="text text-light"> 0</span>
							ᴛᴏᴛᴀʟ: <span id="carregadas"  style="margin-left: 10px; margin-right: 10px;"class="text text-light">0</span>
						</div>
					</center>
				</div>
			</div>
		</div>
	</div>
</div>




<!-- Checker Form -->
<div id="form_checker" name="form_checker" style="margin-top: 20px; display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card-body" style="background-color:#404552";>
				<div class="card">
					<label class="form-control-label" style="margin-left: 10px" for="inputcvv">CREDIT CARDS</label>
					<textarea type="text" style="text-align: center; margin-bottom: 20px" id="lista" class="md-textarea form-control" rows="7" placeholder="xxxxxxxxxxxxxxx|xx|xxxx|xxx"></textarea>
					<label class="form-control-label" style="margin-left: 10px" for="inputcvv">SECRET KEY</label>
					<input type="text" style="text-align: center;" id="sk" name="sk" class=" form-control" rows="1" placeholder="sk_live_xxxxxxxxxxxxxx">
					<button class="btn btn-block btn-pogi" style="margin-top: 40px" id="testar" onclick="enviar()" >START</button>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Generator Form -->
<div id="form_generator" name="form_generator" style="margin-top: 20px; display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card-body" style="background-color:#404552";>
				<div class="card">
					<form name="console" id="console" role="form" method="POST">
                
	                <div>
	                  <div class="row">
	                    <div class="col-lg-8">
	                      <div class="form-group">
	                        <label style="margin-left: 10px" class="form-control-label" for="inputbin">BIN</label>
	                        <input id="ccpN" name="ccp" maxlength="19" type="text" id="inputbin" class="form-control" placeholder="xxxx xxxx xxxx xxxx">
	                      </div>
	                    </div>
	                    <div class="col-lg-4">
	                      <div class="form-group">
	                        <label  style="margin-left: 10px" class="form-control-label" for="inputcvv">CVV</label>
	                        <input type="text" id="eccv" name="eccv" class="form-control" placeholder="rnd" value="rnd">
	                      </div>
	                    </div>
	                  </div>
	                  <div class="row">
	                    <div class="col-lg-4">
	                      <div class="form-group">
	                        <select name="ccoudatfmt" class="input_text" style="display:none;">
	                          <option value="CHECKER" selected="selected">CHK</option>
	                          <option value="CSV">CSV</option>
	                          <option value="XML">XML</option>
	                          <option value="JSON">JSON</option>
	                        </select>
	                        <input type="hidden" name="tr" value="1000">
	                        <input type="hidden" name="L" style="width: 20px" value="1L">
	                        <div type="hidden" id="bininfo" align="center"></div>
	                        <label style="margin-left: 10px" class="form-control-label" for="inputmonth">MONTH</label>
	                        <select class="form-control" name="emeses">
	                          <option value="rnd">RANDOM  </option>
	                          <option value="01">01 - JAN</option>
	                          <option value="02">02 - FEB</option>
	                          <option value="03">03 - MAR</option>
	                          <option value="04">04 - APR</option>
	                          <option value="05">05 - MAY</option>
	                          <option value="06">06 - JUN</option>
	                          <option value="07">07 - JUL</option>
	                          <option value="08">08 - AUG</option>
	                          <option value="09">09 - SEP</option>
	                          <option value="10">10 - OCT</option>
	                          <option value="11">11 - NOV</option>
	                          <option value="12">12 - DEC</option>
	                        </select>
	                      </div>
	                    </div>
	                    <div class="col-lg-4">
	                      <div class="form-group">
	                        <label style="margin-left: 10px" class="form-control-label" for="inputyear">YEAR</label>
	                        <select class="form-control" name="eyear">
	                          <option value="rnd">RANDOM</option>
	                          <option value="2020">2020</option>
	                          <option value="2021">2021</option>
	                          <option value="2022">2022</option>
	                          <option value="2023">2023</option>
	                          <option value="2024">2024</option>
	                          <option value="2025">2025</option>
	                          <option value="2026">2026</option>
	                          <option value="2027">2027</option>
	                          <option value="2028">2028</option>
	                          <option value="2029">2029</option>
	                          <option value="2030">2030</option>
	                        </select>
	                      </div>
	                    </div>
	                    <div class="col-lg-4">
	                      <div class="form-group">
	                        <label style="margin-left: 10px" class="form-control-label" for="inputquantity">QUANTITY</label>
	                        <input type="number" name="ccghm" maxlength="4" class="form-control" value="10">
	                        <select name="ccnsp" class="input_text" style="display:none;">
	                          <option selected="selected">None</option>
	                        </select>
	                      </div>
	                    </div>
	                  </div>
	                  <button type="button" style="margin-top: 20px" class="btn btn-pogi btn-block" name="gerar" id="gerar">GENERATE</button>
	                </div>
	              </form>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Response -->
<div id="form_response" name="form_response" style="margin-top: 20px; display: none;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<div class="card-body" style="background-color:#404552";>
				<div class="card">
					<div class="row">
						<div class="col-md-4">
							<button id="mostra" style="margin-top: 20px" class="btn btn-block btn-pogi">CVV</button>
						</div>
						<div class="col-md-4">
							<button id="mostra2" style="margin-top: 20px" class="btn btn-block btn-pogi">CCN</button>
						</div>
						<div class="col-md-4">
							<button id="mostra3" style="margin-top: 20px" class="btn btn-block btn-pogi">DEAD</button>
						</div>
					</div>
				</div>
				<div class="card">
					<div id="bode"><span id=".live" class="live"/></div>
				    <div id="bode2"><span id=".live2" class="live2"/></div>
				    <div id="bode3"><span id=".dead" class="dead"/></div>
				</div>
			</div>
		</div>
	</div>
</div>



</div>
</div>
  </div>
</div>


</div>
<br>
</center>



<script src="https://code.jquery.com/jquery-3.5.0.js"></script>
<script src="assets/vendors/js/process.js" type="text/javascript"></script>
<script src="assets/vendors/js/generator.js" type="text/javascript"></script>
</body>

</html>
