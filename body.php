<div class="container">
	<h1 class="page-title">Application for Community Internship &amp; Apprentice</h1>
<form method="POST" action="process.php">

	<section id="personalInfo">
		<span class="section-heading">Personal Information</span>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="firstName">First Name</label>
					<input type="text" class="form-control" name="firstName" id="firstName">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="lastName">Last Name</label>
					<input type="text" class="form-control" name="lastName" id="lastName">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="nonSchoolEmail">Non School Email</label>
					<input type="email" class="form-control" name="nonSchoolEmail" id="nonSchoolEmail">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="email">Email</label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="address">Address</label>
					<input type="text" class="form-control" name="address" id="address">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-8">
				<div class="form-group">
					<label for="address2">Address Line 2</label>
					<input type="text" class="form-control" name="address2" id="address2">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="city">City</label>
					<input type="city" class="form-control" name="city" id="city">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="state">State</label>
					<input type="state" class="form-control" name="state" id="state">
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="zip">Zip Code</label>
					<input type="zip" class="form-control" name="zip" id="zip">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="country">Country</label>
					<div class="bfh-selectbox bfh-countries" data-country="US" data-flags="true" data-name="country" data-id="country">
						
					</div>
					
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="primaryPhone">Primary Phone Number</label>
					<input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" name="primaryPhone" id="primaryPhone">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="alternatePhone">Alternate Phone Number</label>
					<input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" name="alternatePhone" id="alternatePhone">
				</div>
			</div>
		</div>
	</section>


	<section id="healthInsurance">
		<span class="section-heading">Health Insurance Information</span>
		<div class="row">
			<div class="col-md-4">
				<div class="form-group">
					<label for="insuranceProvider">Insurance Company</label>
					<input type="text" class="form-control" name="insuranceProvider" id="insuranceProvider">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="insurancePhone">Insurace Phone Number</label>
					<input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" name="insurancePhone" id="insurancePhone">
				</div>
			</div>
			<div class="col-md-4">
				<div class="form-group">
					<label for="insuranceGroupNumber">Insurance Group Number</label>
					<input type="text" class="form-control" name="insuranceGroupNumber" id="insuranceGroupNumber">
				</div>
			</div>
		</div>
	</section>


	<section id="emergencyContact">
		<span class="section-heading">Emergency Contact Information</span>
		<div class="row">
			<div class="col-md-6">
				<label for="emergencyContactFirstName">First Name</label>
				<input type="text" class="form-control" name="emergencyContactFirstName" id="emergencyContactFirstName">
			</div>
			<div class="col-md-6">
				<label for="emergencyContactLastName">Last Name</label>
				<input type="text" class="form-control" name="emergencyContactLastName" id="emergencyContactLastName">
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<label for="emergencyContactEmail">Email</label>
				<input type="email" class="form-control" name="emergencyContactEmail" id="emergencyContactEmail">
			</div>
			<div class="col-md-4">
				<label for="emergencyContactPrimaryPhone">Primary Phone Number</label>
				<input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" name="emergencyContactPrimaryPhone" id="emergencyContactPrimaryPhone">
			</div>
			<div class="col-md-4">
				<label for="emergencyContactAlternatePhone">Alternate Phone Number</label>
				<input type="text" class="form-control bfh-phone" data-format="+1 (ddd) ddd-dddd" name="emergencyContactAlternatePhone" id="emergencyContactAlternatePhone">
			</div>
		</div>
	</section>


	<section id="education">
		<span class="section-heading">Education Information</span>
		<div class="row">
			<div class="col-md-4">
				<label for="highSchool">High School</label>
				<input type="text" class="form-control" name="highSchool" id="highSchool">
			</div>
			<div class="col-md-4">
				<label for="college">College</label>
				<input type="text" class="form-control" name="college" id="college">
			</div>
			<div class="col-md-4">
				<label for="collegeMajor">Major or Field of Interest</label>
				<input type="text" class="form-control" name="collegeMajor" id="collegeMajor">
			</div>
		</div>
	</section>


	<section id="skillsInventory">
		<span class="section-heading">Skills Inventory</span>
		<span class="instructions">
			Unfamiliar = No experienc<br>
			Observed = Some experiece<br>
			Practiced = Able to perform skill at high level</span>
		<table class="table table-striped table-bordered table-repsonsive">
			<thead>
				<tr>
					<th></th>
					<td class="small">Unfamiliar</td>
					<td class="small">Observed</td>
					<td class="small">Practiced</td>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th><label for="recordKeeping">Record Keeping</label></th>
					<td><input type="radio" name="recordKeeping" id="recordKeeping1" value="Unfamiliar"></td>
					<td><input type="radio" name="recordKeeping" id="recordKeeping2" value="Observed"></td>
					<td><input type="radio" name="recordKeeping" id="recordKeeping3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="payrollManagement">Payroll Management</label></th>
					<td><input type="radio" name="payrollManagement" id="payrollManagement1" value="Unfamiliar"></td>
					<td><input type="radio" name="payrollManagement" id="payrollManagement2" value="Observed"></td>
					<td><input type="radio" name="payrollManagement" id="payrollManagement3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="webDesign">Website Design, Development, &amp; Mangagement</label></th>
					<td><input type="radio" name="webDesign" id="webDesign1" value="Unfamiliar"></td>
					<td><input type="radio" name="webDesign" id="webDesign2" value="Observed"></td>
					<td><input type="radio" name="webDesign" id="webDesign3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="cooking">Cooking and/or Preserving/Canning Food</label></th>
					<td><input type="radio" name="cooking" id="cooking1" value="Unfamiliar"></td>
					<td><input type="radio" name="cooking" id="cooking2" value="Observed"></td>
					<td><input type="radio" name="cooking" id="cooking3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="gardening">Gardening</label></th>
					<td><input type="radio" name="gardening" id="gardening1" value="Unfamiliar"></td>
					<td><input type="radio" name="gardening" id="gardening2" value="Observed"></td>
					<td><input type="radio" name="gardening" id="gardening3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="mechanicalElectrical">Mechanical or Electrical Skills</label></th>
					<td><input type="radio" name="mechanicalElectrical" id="mechanicalElectrical1" value="Unfamiliar"></td>
					<td><input type="radio" name="mechanicalElectrical" id="mechanicalElectrical2" value="Observed"></td>
					<td><input type="radio" name="mechanicalElectrical" id="mechanicalElectrical3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="alternativeEnergy">Alternative Energy Experience</label></th>
					<td><input type="radio" name="alternativeEnergy" id="alternativeEnergy1" value="Unfamiliar"></td>
					<td><input type="radio" name="alternativeEnergy" id="alternativeEnergy2" value="Observed"></td>
					<td><input type="radio" name="alternativeEnergy" id="alternativeEnergy3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="microsoftOffice">Microsoft Office (Word, Excel, PowerPoint)</label></th>
					<td><input type="radio" name="microsoftOffice" id="microsoftOffice1" value="Unfamiliar"></td>
					<td><input type="radio" name="microsoftOffice" id="microsoftOffice2" value="Observed"></td>
					<td><input type="radio" name="microsoftOffice" id="microsoftOffice3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="dailyChores">Daily or Regular Chores at Home or Business</label></th>
					<td><input type="radio" name="dailyChores" id="dailyChores1" value="Unfamiliar"></td>
					<td><input type="radio" name="dailyChores" id="dailyChores2" value="Observed"></td>
					<td><input type="radio" name="dailyChores" id="dailyChores3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="4HorFFA">Participation in 4-H or Future Farmers of America</label></th>
					<td><input type="radio" name="4HorFFA" id="4HorFFA1" value="Unfamiliar"></td>
					<td><input type="radio" name="4HorFFA" id="4HorFFA2" value="Observed"></td>
					<td><input type="radio" name="4HorFFA" id="4HorFFA3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="documentDesign">Document Design &amp; Layout</label></th>
					<td><input type="radio" name="documentDesign" id="documentDesign1" value="Unfamiliar"></td>
					<td><input type="radio" name="documentDesign" id="documentDesign2" value="Observed"></td>
					<td><input type="radio" name="documentDesign" id="documentDesign3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="farmersMarket">Farmer's Market or Community Food Bank</label></th>
					<td><input type="radio" name="farmersMarket" id="farmersMarket1" value="Unfamiliar"></td>
					<td><input type="radio" name="farmersMarket" id="farmersMarket2" value="Observed"></td>
					<td><input type="radio" name="farmersMarket" id="farmersMarket3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="grazingPlanning">Grazing Planning and Management</label></th>
					<td><input type="radio" name="grazingPlanning" id="grazingPlanning1" value="Unfamiliar"></td>
					<td><input type="radio" name="grazingPlanning" id="grazingPlanning2" value="Observed"></td>
					<td><input type="radio" name="grazingPlanning" id="grazingPlanning3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="plantIdentification">Native Plant Identificaion</label></th>
					<td><input type="radio" name="plantIdentification" id="plantIdentification1" value="Unfamiliar"></td>
					<td><input type="radio" name="plantIdentification" id="plantIdentification2" value="Observed"></td>
					<td><input type="radio" name="plantIdentification" id="plantIdentification3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="grassLandDesertEcology">Grassland &amp; Desert Ecology</label></th>
					<td><input type="radio" name="grassLandDesertEcology" id="grassLandDesertEcology1" value="Unfamiliar"></td>
					<td><input type="radio" name="grassLandDesertEcology" id="grassLandDesertEcology2" value="Observed"></td>
					<td><input type="radio" name="grassLandDesertEcology" id="grassLandDesertEcology3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="soilAnalysis">Soil Analysis</label></th>
					<td><input type="radio" name="soilAnalysis" id="soilAnalysis1" value="Unfamiliar"></td>
					<td><input type="radio" name="soilAnalysis" id="soilAnalysis2" value="Observed"></td>
					<td><input type="radio" name="soilAnalysis" id="soilAnalysis3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="researchProjects">Research Projects</label></th>
					<td><input type="radio" name="researchProjects" id="researchProjects1" value="Unfamiliar"></td>
					<td><input type="radio" name="researchProjects" id="researchProjects2" value="Observed"></td>
					<td><input type="radio" name="researchProjects" id="researchProjects3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="eventOrganiztion">Organization of Events or Celebrations</label></th>
					<td><input type="radio" name="eventOrganiztion" id="eventOrganiztion1" value="Unfamiliar"></td>
					<td><input type="radio" name="eventOrganiztion" id="eventOrganiztion2" value="Observed"></td>
					<td><input type="radio" name="eventOrganiztion" id="eventOrganiztion3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="leadershipPractices">Leadership Practices (Organization Officer, Team Building, etc.)</label></th>
					<td><input type="radio" name="leadershipPractices" id="leadershipPractices1" value="Unfamiliar"></td>
					<td><input type="radio" name="leadershipPractices" id="leadershipPractices2" value="Observed"></td>
					<td><input type="radio" name="leadershipPractices" id="leadershipPractices3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="decisionMaking">Decision Making</label></th>
					<td><input type="radio" name="decisionMaking" id="decisionMaking1" value="Unfamiliar"></td>
					<td><input type="radio" name="decisionMaking" id="decisionMaking2" value="Observed"></td>
					<td><input type="radio" name="decisionMaking" id="decisionMaking3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="listeningSkills">Listening Skills</label></th>
					<td><input type="radio" name="listeningSkills" id="listeningSkills1" value="Unfamiliar"></td>
					<td><input type="radio" name="listeningSkills" id="listeningSkills2" value="Observed"></td>
					<td><input type="radio" name="listeningSkills" id="listeningSkills3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="problemSolving">Problem Solving</label></th>
					<td><input type="radio" name="problemSolving" id="problemSolving1" value="Unfamiliar"></td>
					<td><input type="radio" name="problemSolving" id="problemSolving2" value="Observed"></td>
					<td><input type="radio" name="problemSolving" id="problemSolving3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="conflictResolution">Conflict Resolution</label></th>
					<td><input type="radio" name="conflictResolution" id="conflictResolution1" value="Unfamiliar"></td>
					<td><input type="radio" name="conflictResolution" id="conflictResolution2" value="Observed"></td>
					<td><input type="radio" name="conflictResolution" id="conflictResolution3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="professionalOrgMembership">Professional Organization Membership</label></th>
					<td><input type="radio" name="professionalOrgMembership" id="professionalOrgMembership1" value="Unfamiliar"></td>
					<td><input type="radio" name="professionalOrgMembership" id="professionalOrgMembership2" value="Observed"></td>
					<td><input type="radio" name="professionalOrgMembership" id="professionalOrgMembership3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="professionalOralWritten">Professional Oral &amp Written Skills</label></th>
					<td><input type="radio" name="professionalOralWritten" id="professionalOralWritten1" value="Unfamiliar"></td>
					<td><input type="radio" name="professionalOralWritten" id="professionalOralWritten2" value="Observed"></td>
					<td><input type="radio" name="professionalOralWritten" id="professionalOralWritten3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="politics">Politics</label></th>
					<td><input type="radio" name="politics" id="politics1" value="Unfamiliar"></td>
					<td><input type="radio" name="politics" id="politics2" value="Observed"></td>
					<td><input type="radio" name="politics" id="politics3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="budgetManagement">Budget Management</label></th>
					<td><input type="radio" name="budgetManagement" id="budgetManagement1" value="Unfamiliar"></td>
					<td><input type="radio" name="budgetManagement" id="budgetManagement2" value="Observed"></td>
					<td><input type="radio" name="budgetManagement" id="budgetManagement3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="exhibitDesign">Exhibit/Interpretive Materrials Design</label></th>
					<td><input type="radio" name="exhibitDesign" id="exhibitDesign1" value="Unfamiliar"></td>
					<td><input type="radio" name="exhibitDesign" id="exhibitDesign2" value="Observed"></td>
					<td><input type="radio" name="exhibitDesign" id="exhibitDesign3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="dataCollection">Data Collection &amp; Input</label></th>
					<td><input type="radio" name="dataCollection" id="dataCollection1" value="Unfamiliar"></td>
					<td><input type="radio" name="dataCollection" id="dataCollection2" value="Observed"></td>
					<td><input type="radio" name="dataCollection" id="dataCollection3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="sustainability">Involvement with Sustainable Practices or Projects</label></th>
					<td><input type="radio" name="sustainability" id="sustainability1" value="Unfamiliar"></td>
					<td><input type="radio" name="sustainability" id="sustainability2" value="Observed"></td>
					<td><input type="radio" name="sustainability" id="sustainability3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="farming">Experience with Farming</label></th>
					<td><input type="radio" name="farming" id="farming1" value="Unfamiliar"></td>
					<td><input type="radio" name="farming" id="farming2" value="Observed"></td>
					<td><input type="radio" name="farming" id="farming3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="familyBusinessEntrepreneurial">Family Business or Entrepreneurial Experience</label></th>
					<td><input type="radio" name="familyBusinessEntrepreneurial" id="familyBusinessEntrepreneurial1" value="Unfamiliar"></td>
					<td><input type="radio" name="familyBusinessEntrepreneurial" id="familyBusinessEntrepreneurial2" value="Observed"></td>
					<td><input type="radio" name="familyBusinessEntrepreneurial" id="familyBusinessEntrepreneurial3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="salesMarketing">Sales &amp; Marketing</label></th>
					<td><input type="radio" name="salesMarketing" id="salesMarketing1" value="Unfamiliar"></td>
					<td><input type="radio" name="salesMarketing" id="salesMarketing2" value="Observed"></td>
					<td><input type="radio" name="salesMarketing" id="salesMarketing3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="socialMedia">Social Media (Facebook, Blogs, etc.)</label></th>
					<td><input type="radio" name="socialMedia" id="socialMedia1" value="Unfamiliar"></td>
					<td><input type="radio" name="socialMedia" id="socialMedia2" value="Observed"></td>
					<td><input type="radio" name="socialMedia" id="socialMedia3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="volunteer">Volunteer Service or Projects</label></th>
					<td><input type="radio" name="volunteer" id="volunteer1" value="Unfamiliar"></td>
					<td><input type="radio" name="volunteer" id="volunteer2" value="Observed"></td>
					<td><input type="radio" name="volunteer" id="volunteer3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="photography">Photography</label></th>
					<td><input type="radio" name="photography" id="photography1" value="Unfamiliar"></td>
					<td><input type="radio" name="photography" id="photography2" value="Observed"></td>
					<td><input type="radio" name="photography" id="photography3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="buildingSkills">Carpentry, Welding, or other Building Skills</label></th>
					<td><input type="radio" name="buildingSkills" id="buildingSkills1" value="Unfamiliar"></td>
					<td><input type="radio" name="buildingSkills" id="buildingSkills2" value="Observed"></td>
					<td><input type="radio" name="buildingSkills" id="buildingSkills3" value="Practiced"></td>
				</tr>
				<tr>
					<th><label for="publicSpeaking">Public Speaking</label></th>
					<td><input type="radio" name="publicSpeaking" id="publicSpeaking1" value="Unfamiliar"></td>
					<td><input type="radio" name="publicSpeaking" id="publicSpeaking2" value="Observed"></td>
					<td><input type="radio" name="publicSpeaking" id="publicSpeaking3" value="Practiced"></td>
				</tr>
			</tbody>
		</table>
	</section>


	<section id="otherInfo">
		<span class="section-heading">Other Information</span>
		<div class="row">
			<div class="col-md-6">
				<label for="groups">Participation in School, Church, or Civic Groups</label>
				<div><input type="radio" name="groups" id="groups1" value="Unfamiliar"> <label for="groups1">Unfamiliar</label></div>
				<div><input type="radio" name="groups" id="groups2" value="Observed"> <label for="groups2">Observed</label></div>
				<div><input type="radio" name="groups" id="groups3" value="Practiced"> <label for="groups3">Practiced</label></div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="groupNames">Group Name(s)</label>
					<input type="text" name="groupNames" id="groupNames" class="form-control">
					<span>If none, type N/A</span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<label for="otherSoftware">Other Sofware Experience</label>
				<div><input type="radio" name="otherSoftware" id="otherSoftware1" value="Unfamiliar"> <label for="otherSoftware1">Unfamiliar</label></div>
				<div><input type="radio" name="otherSoftware" id="otherSoftware2" value="Observed"> <label for="otherSoftware2">Observed</label></div>
				<div><input type="radio" name="otherSoftware" id="otherSoftware3" value="Practiced"> <label for="otherSoftware3">Practiced</label></div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="softwareNames">Type/Name of Software</label>
					<input type="text" name="softwareNames" id="softwareNames" class="form-control">
					<span>If none, type N/A</span>
				</div>
			</div>
		</div>
	</section>


	<section id="additionalRequirements">
		<span class="section-heading">Additional Requirements</span>
		<div>
			<p>If you are selected as an Ogallala Commons Community Intern, in addition to the hours you spend on your internship work (for which you will be paid an hourly stipend), you must also meet the following requirements (non-stipend time):</p>
			<ul>
				<li>Execute a Work Plan</li>
				<li>Attend an Orientation in Dumas, Texas *** add 2015 date ***</li>
				<li>Create and publish 5 Internet blog postings with 10 photos during internship period</li>
				<li>Conduct an &#8220;Explore Your Community&#8221; exercise </li>
				<li>Do 10 hours of Community Service during internship period</li>
				<li>Prepare Internship Portfolio (via PowerPoint) and present it during a Harvesting Ceremony</li>
				<li>Prepare an Evaluation of the internship, as well as receive an evaluation from supervisor</li>
			</ul>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="electronicSignature">Electronic Signature</label>
					<input type="text" class="form-control" name="electronicSignature" id="electronicSignature">
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="electronicSignatureDate">Date</label>
					<div class="bfh-datepicker" data-name="electronicSignatureDate" data-id="electronicSignatureDate">
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="resume">Please attach your resume</label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse&hellip; <input type="file" name="resume" id="resume">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="photo">Please attach a recent "mug shot" photo of yourself </label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse&hellip; <input type="file" name="photo" id="photo">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="backgroundCheckPermission">Attach the VeriFYI Background Check Permission Form (this document will be emailed to you before you complete your full application. OC requires and pays for a confidential criminal background check for all intern & apprentice applicants.) </label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse&hellip; <input type="file" name="backgroundCheckPermission" id="backgroundCheckPermission">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="form-group">
					<label for="referenceLetter">Please Attach a Letter of Reference </label>
					<span>(250 - 300 word max)</span>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse&hellip; <input type="file" name="referenceLetter" id="referenceLetter">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-6">
				<div class="form-group">
					<label for="essayQuestions">Please attach a word document answering these five questions:
						<ol>
							<li>Please identify and describe any of your key skills that were NOT included on the checklist on the previous page.</li>
							<li>Identify your top five tactical skills and talents (e.g., editing, writing, oral communication, research, etc.). Click the link for a list that will help you think through this :: <a href="http://bit.ly/1tIivbT">http://bit.ly/1tIivbT</a></li>
							<li>Identify your top five content skills and talents (e.g., rural communities, generational understanding, etc.).</li>
							<li>Based on our conversation and your review of our website, please identify possible areas that interest you and could be a focus for your core project.</li>
							<li>Write a brief biographical sketch (Limit answers to 250 words. Your written response will become your first post on our intern or apprentice blog.) 
Where are you from? A little about your background. What are you passionate about? What are your main interests or hobbies? What are your long-term career goals, and how can an internship help you to reach those goals?</li>
						</ol>
					</label>
					<div class="input-group">
						<span class="input-group-btn">
							<span class="btn btn-default btn-file">
								Browse&hellip; <input type="file" name="essayQuestions" id="essayQuestions">
							</span>
						</span>
						<input type="text" class="form-control" readonly>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="buttons">
		<input type="submit" value="submit" class="btn btn-primary">
	</div>

</form>
</div>