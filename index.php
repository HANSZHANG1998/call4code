<!DOCTYPE HTML>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- 所有地图数据详情见：https://img.hcharts.cn/mapdata/index.html -->

<link rel="icon" href="static/img/favicon.ico">
<link href="layui/css/layui.css" rel="stylesheet">
<link href="static/css/jquery-ui.css" rel="stylesheet">
<link href="static/css/style.css" rel="stylesheet">
<link href="static/css/font-awesome.css" rel="stylesheet">
<link href="static/css/index.css" rel="stylesheet">
<script src="static/js/jquery.js"></script>
<script src="static/js/highmaps.js"></script>
<script src="static/js/exporting.js"></script>
<script src="static/js/index.js"></script>
<script src="static/js/jquery-ui.js"></script>
<script src="static/js/jquery.combobox.js"></script>
<script src="static/js/main.js"></script>

</head>
<body>
	<div id="spinner" class="spinner">
	  <div class="double-bounce1"></div>
	  <div class="double-bounce2"></div>
	<p class="load">Loading...</p>
	</div>



<div style="display:none;width:900px" id="demo-wrapper">
	<div class="h2" style="margin-top:50px"><h2>World's CO2 emission data and predictions</h2></div>

	<div class="layui-form">
	<div class="layui-form-item" style="margin-left:250px;margin-top:50px">
	      <label class="layui-form-label" style="width:100px">Search details:</label>
	      <div class="layui-input-inline">
			<select id="select" name="modules" lay-search="">
				<option value=""></option>
				<option value="1">Afghanistan</option>
				<option value="2">Albania</option>
				<option value="3">Algeria</option>
				<option value="4">Angola</option>
				<option value="5">Anguilla</option>
				<option value="6">Antigua and Barbuda</option>
				<option value="7">Argentina</option>
				<option value="8">Armenia</option>
				<option value="9">Aruba</option>
				<option value="10">Australia</option>
				<option value="11">Austria</option>
				<option value="12">Azerbaijan</option>
				<option value="13">Bahamas</option>
				<option value="14">Bahrain</option>
				<option value="15">Bangladesh</option>
				<option value="16">Barbados</option>
				<option value="17">Belarus</option>
				<option value="18">Belgium</option>
				<option value="19">Belize</option>
				<option value="20">Benin</option>
				<option value="21">Bermuda</option>
				<option value="22">Bhutan</option>
				<option value="23">Bolivia (Plurinational State of)</option>
				<option value="24">Bosnia and Herzegovina</option>
				<option value="25">Botswana</option>
				<option value="26">Brazil</option>
				<option value="27">British Virgin Islands</option>
				<option value="28">Brunei Darussalam</option>
				<option value="29">Bulgaria</option>
				<option value="30">Burkina Faso</option>
				<option value="31">Burundi</option>
				<option value="32">Cabo Verde</option>
				<option value="33">Cambodia</option>
				<option value="34">Cameroon</option>
				<option value="35">Canada</option>
				<option value="36">Cayman Islands</option>
				<option value="37">Central African Republic</option>
				<option value="38">Chad</option>
				<option value="39">Chile</option>
				<option value="40">China</option>
				<option value="41">China, Hong Kong SAR</option>
				<option value="42">China, Macao SAR</option>
				<option value="43">China, Taiwan Province of</option>
				<option value="44">Colombia</option>
				<option value="45">Comoros</option>
				<option value="46">Congo</option>
				<option value="47">Cook Islands</option>
				<option value="48">Costa Rica</option>
				<option value="49">Côte d Ivoire</option>
				<option value="50">Croatia</option>
				<option value="51">Cuba</option>
				<option value="52">Cyprus</option>
				<option value="53">Czech Republic</option>
				<option value="54">Democratic People s Republic of Korea</option>
				<option value="55">Democratic Republic of the Congo</option>
				<option value="56">Denmark</option>
				<option value="57">Djibouti</option>
				<option value="58">Dominica</option>
				<option value="59">Dominican Republic</option>
				<option value="60">Ecuador</option>
				<option value="61">Egypt</option>
				<option value="62">El Salvador</option>
				<option value="63">Equatorial Guinea</option>
				<option value="64">Eritrea</option>
				<option value="65">Estonia</option>
				<option value="66">Ethiopia</option>
				<option value="67">Falkland Islands (Malvinas)</option>
				<option value="68">Fiji</option>
				<option value="69">Finland</option>
				<option value="70">France</option>
				<option value="71">French Guiana</option>
				<option value="72">French Polynesia</option>
				<option value="73">Gabon</option>
				<option value="74">Gambia</option>
				<option value="75">Georgia</option>
				<option value="76">Germany</option>
				<option value="77">Ghana</option>
				<option value="78">Gibraltar</option>
				<option value="79">Greece</option>
				<option value="80">Grenada</option>
				<option value="81">Guadeloupe</option>
				<option value="82">Guatemala</option>
				<option value="83">Guinea</option>
				<option value="84">Guinea-Bissau</option>
				<option value="85">Guyana</option>
				<option value="86">Haiti</option>
				<option value="87">Honduras</option>
				<option value="88">Hungary</option>
				<option value="89">Iceland</option>
				<option value="90">India</option>
				<option value="91">Indonesia</option>
				<option value="92">Iran (Islamic Republic of)</option>
				<option value="93">Iraq</option>
				<option value="94">Ireland</option>
				<option value="95">Israel</option>
				<option value="96">Italy</option>
				<option value="97">Jamaica</option>
				<option value="98">Japan</option>
				<option value="99">Jordan</option>
				<option value="100">Kazakhstan</option>
				<option value="101">Kenya</option>
				<option value="102">Kiribati</option>
				<option value="103">Kuwait</option>
				<option value="104">Kyrgyzstan</option>
				<option value="105">Lao People s Democratic Republic</option>
				<option value="106">Latvia</option>
				<option value="107">Lebanon</option>
				<option value="108">Lesotho</option>
				<option value="109">Liberia</option>
				<option value="110">Libya</option>
				<option value="111">Lithuania</option>
				<option value="112">Luxembourg</option>
				<option value="113">Madagascar</option>
				<option value="114">Malawi</option>
				<option value="115">Malaysia</option>
				<option value="116">Maldives</option>
				<option value="117">Mali</option>
				<option value="118">Malta</option>
				<option value="119">Martinique</option>
				<option value="120">Mauritania</option>
				<option value="121">Mauritius</option>
				<option value="122">Mexico</option>
				<option value="123">Mongolia</option>
				<option value="124">Montserrat</option>
				<option value="125">Morocco</option>
				<option value="126">Mozambique</option>
				<option value="127">Myanmar</option>
				<option value="128">Namibia</option>
				<option value="129">Nepal</option>
				<option value="130">Netherlands</option>
				<option value="131">Netherlands Antilles</option>
				<option value="132">New Caledonia</option>
				<option value="133">New Zealand</option>
				<option value="134">Nicaragua</option>
				<option value="135">Niger</option>
				<option value="136">Nigeria</option>
				<option value="137">Norway</option>
				<option value="138">Oman</option>
				<option value="139">Pakistan</option>
				<option value="140">Palau</option>
				<option value="141">Panama</option>
				<option value="142">Papua New Guinea</option>
				<option value="143">Paraguay</option>
				<option value="144">Peru</option>
				<option value="145">Philippines</option>
				<option value="146">Poland</option>
				<option value="147">Portugal</option>
				<option value="148">Puerto Rico</option>
				<option value="149">Qatar</option>
				<option value="150">Republic of Korea</option>
				<option value="151">Republic of Moldova</option>
				<option value="152">Réunion</option>
				<option value="153">Romania</option>
				<option value="154">Russian Federation</option>
				<option value="155">Rwanda</option>
				<option value="156">Saint Helena</option>
				<option value="157">Saint Kitts and Nevis</option>
				<option value="158">Saint Lucia</option>
				<option value="159">Saint Pierre and Miquelon</option>
				<option value="160">Saint Vincent and the Grenadines</option>
				<option value="161">Samoa</option>
				<option value="162">Sao Tome and Principe</option>
				<option value="163">Saudi Arabia</option>
				<option value="164">Senegal</option>
				<option value="165">Serbia and Montenegro</option>
				<option value="166">Seychelles</option>
				<option value="167">Sierra Leone</option>
				<option value="168">Singapore</option>
				<option value="169">Slovakia</option>
				<option value="170">Slovenia</option>
				<option value="171">Solomon Islands</option>
				<option value="172">Somalia</option>
				<option value="173">South Africa</option>
				<option value="174">Spain</option>
				<option value="175">Sri Lanka</option>
				<option value="176">Sudan (former)</option>
				<option value="177">Suriname</option>
				<option value="178">Swaziland</option>
				<option value="179">Sweden</option>
				<option value="180">Switzerland</option>
				<option value="181">Syrian Arab Republic</option>
				<option value="182">Tajikistan</option>
				<option value="183">Thailand</option>
				<option value="184">The former Yugoslav Republic of Macedonia</option>
				<option value="185">Timor-Leste</option>
				<option value="186">Togo</option>
				<option value="187">Tonga</option>
				<option value="188">Trinidad and Tobago</option>
				<option value="189">Tunisia</option>
				<option value="190">Turkey</option>
				<option value="191">Turkmenistan</option>
				<option value="192">Turks and Caicos Islands</option>
				<option value="193">Uganda</option>
				<option value="194">Ukraine</option>
				<option value="195">United Arab Emirates</option>
				<option value="196">United Kingdom</option>
				<option value="197">United Republic of Tanzania</option>
				<option value="198">United States of America</option>
				<option value="199">United States Virgin Islands</option>
				<option value="200">Uruguay</option>
				<option value="201">Uzbekistan</option>
				<option value="202">Vanuatu</option>
				<option value="203">Venezuela (Bolivarian Republic of)</option>
				<option value="204">Viet Nam</option>
				<option value="205">Western Sahara</option>
				<option value="206">Yemen</option>
				<option value="207">Zambia</option>
				<option value="208">Zimbabwe</option>
      </select>
	      </div>
				<div style="padding-top:3px">
				<a id="search" class="layui-btn layui-btn-sm" style="background-color:#4880b7">search</a>
			</div>
	  </div>
  </div>
	<div id="mapBox">
		<div id="up"></div>
		<div class="selector">

			<select id="mapDropdown" class="ui-widget combobox"></select>

		</div>
		<div id="container"></div>
	</div>
</div>
</body>
<script src="layui/layui.all.js"></script>
<script>
layui.use(['layer'], function() {
	$ = layui.jquery;
	var layer = layui.layer;

	$( window ).load(function() {
		$("#spinner").css("display","none");
 		$("#demo-wrapper").css("display","");
	});
$(".layui-edge").remove();
$("#search").click(function() {
	window.location.href="details.php?country=" + $("#select").find("option:selected").text();
});
});
</script>

</html>
