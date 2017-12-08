@extends('template')

@section('title')

  WUDC Motions

@endsection

@section('content')  

  <h1>WUDC Motions</h1>

  <h3>2018 Mexico WUDC</h3>
  <p><b>CA Team</b>: Michael Dunn Goekjian, Mifzal Mohammed, Emma Johnstone, Sella Nevo, Wasifa Noshin, Steven Penner, Paul Smith, Evan Lynyak, Nicholas Ferezin</p>
  <p><b>Motions</b>: We'll find out soon! :) For more info visit <a href="http://www.wudc2018.mx/">the Mexico WUDC website</a>.</p>
  <p>
  <ul>
    <li><a href="http://hellomotions.com/search?q=Michael+Dunn+Goekjian%2C+Mifzal+Mohammed%2C+Emma+Johnstone%2C+Sella+Nevo%2C+Wasifa+Noshin%2C+Steven+Penner%2C+Paul+Smith%2C+Evan+Lynyak%2C+Nicholas+Ferezin&search-motions=">Motions set by members of the Mexico WUDC CA Team</a></li>
  </ul>  
  </p>

  <h3>Shortcuts to 2007-2017 WUDC motions</h3>
  <p>
  <ul>
    <li><a href="#wudc2017">2017</a> <a href="#wudc2016">2016</a> <a href="#wudc2015">2015</a> <a href="#wudc2014">2014</a> <a href="#wudc2013">2013</a> <a href="#wudc2012">2012</a> <a href="#wudc2011">2011</a></li>
    <li><a href="#wudc2010">2010</a> <a href="#wudc2009">2009</a> <a href="#wudc2008">2008</a> <a href="#wudc2007">2007</a></li>
  </ul>
  </p>

  <h3 id="wudc2017">2017 Dutch WUDC</h3>
  <p>CA Team: Syed Saddiq, Karin Merckens, Hyewon Rho, Michael Dunn Goekjian, Omer Nevo, Jodie O'Neill, Veenu Goswami, Yashodhan Nair, Ingrid Rodriguez</p>
  
  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2017motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="wudc2016">2016 Thessaloniki WUDC</h3>  
  <p>CA Team: Manos Moschopoulos, Arinah Najwa, Chris Bisset, John McKee, Josh Zoffer, Sarah Balakrishnan, Tasneem Elias</p>
 
  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2016motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="wudc2015">2015 Malaysia WUDC</h3>
  <p>CA Team: Shafiq Bazari, Jonathan Leader Maynard, Danique Van Koppenhagen, Sebastian Templeton, Engin Arikan, Brett Frazer, Madeline Schultz</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2015motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="wudc2014">2014 Chennai WUDC</h3>
  <p>CA team: Michael Baer, Harish Natarajan, Ely Zosa, Stephen Whittington, Fiona Prowse, Michael Shapira
	</p>

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2014motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="wudc2013">2013 Berlin WUDC</h3>
  <p>CA Team: Sharmila Parmanand, Douglas Cochran, Victor Finkel, Isabelle Fischer, James Kilcup, Jens Fischer</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2013motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <h3 id="wudc2012">2012 Manila WUDC</h3>
  <p>CA Team: Sam Block, Lucinda David, Joe Roussos, Tim Mooney, Cormac Early, Masako Suzuki, Art Ward</p>

  <table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2012motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="wudc2011">2011 Botswana WUDC</h3>
	<p>CA Team: Logandran Balavijendran, Pearl Mathumo, James Dray, Anat Gelber, Richard Lizius, Tim Jeffrie
	</p>
	<!--From http://idebate.org/node/7365-->

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2011motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="wudc2010">2010 Vehbi Koc WUDC</h3>
	<p>CA Team: Can Okar, Josh Bone, Julia Bowes, Suthen Tate Thomas, Will Jones, Handan Orel, Ozan Mert Ondes.</p>
	<!-- http://worlddebating.blogspot.co.uk/2009/12/koc-wudc-debating-guide-speaker-scale.html-->

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2010motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="wudc2009">2009 Cork WUDC</h3>
	<p>CA Team: Derek Lande, Erin O'Brien, Ivan Ah Sam, Rory Gillis, Daniel Patrick McCarthy</p>
	
	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2009motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="wudc2008">2008 Assumption WUDC</h3>
	<p>CA Team: Rajesh Krishnan, Ciaran Lawlor, Beth O’Connor, Joanna Nairn</p>
	<!--CA info from http://worlddebating.blogspot.co.uk/2008/01/full-results-from-worlds-2008.html-->

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2008motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

	<h3 id="wudc2007">2007 UBC WUDC</h3>
	<p>CA Team: Kevin Massie, Derek Lande, Tim Sonnreich, Alex Deane</p>
	<!-- CA Team info from idebate.org -->

	<table class="table table-striped">
    <tr>
     <th>Round</th>
     <th>Motion</th>
     <th>Infoslide</th>
    </tr>
    @foreach ($wudc2007motions as $motion)
      <tr>
        <td> {{ $motion ->Round }} </td>
        <td> {{ $motion ->Motion }} </td>
        <td> {{ $motion ->Infoslide }} </td>
      </tr>
    @endforeach 
   </table>

  <!--

	<h3>2006 Dublin WUDC</h3>

	<p>
		Final: That this house would abolish all laws prohibiting cruelty to animals
		Semi: This house would prohibit speeches that incite hatred (wording may be incorrect)
		Qtr: This House Would permit legislating by citizen initiated referenda
		Octo: This House believes that international law should recognise the right of each state to unilaterally undertake armed humanitarian intervention

		ESL Final: This House Believes that European Governments should payparents to have children.
		ESL Semi: This House would abandon the civilian use of nuclear power.
		1 This House Would Grant An Amnesty To All Illegal Immigrants Currently In The United States
		2 That This House Believes That The Catholic Church Should Allow The Use Of Condoms In The Fight Against HIV/AIDS In Africa
		3 That This House Believes The West Should End Military Cooperation With Pakistan Until It Holds Free Presidential Elections
		4 This House Would Prohibit Women Over The Age Of 45 Years From Undergoing Assisted Human Reproduction
		5 This House Would Give Japan A Permanent Seat On The United Nations Security Council
		6 This House Would Not Allow Intelligent Design To Be Included In The School Science Curriculum
		7 This House Would Recognise A Legally Enforceable Right To A Minimum Standard Of Living
		8 This House Supports The Creation Of An Independent State For The Iraqi Kurds
		9 This House Supports Indigenous Persons Convicted Of A Crime Being Sentenced By Their Community And Not The Courts
	</p>

	<h3>2005 Malaysia (Multimedia University) Worlds</h3>
	<p>CA Team: Logan Balavijendran, Kevin Massie, Praba Ganesan, Jeremy Brier </p>
	Final This House Supports Corporal Punishment in Schools
	Semi-Final This House Would Use Gambling To Rejuvenate Depressed Economic Zones
	Quarter Final This House Believes That Mentally Handicapped People Are Better Cared For In The Community Than In Institutions
	Octo Final This House Believes It Is Time For an ASEAN Parliament

	Round 1 This House would compel HIV infected people to disclose their disease to their sexual partners
	Round 2 This house believes the EU should open its doors to North Africa
	Round 3 This House would not teach vocational studies at University
	Round 4 This House would positively discriminate women in the armed forces
	Round 5 This House believes that outsourcing is good for the developed and developing nations.
	Round 6 This house would have harsher sentences for celebrity criminals
	Round 7 This House Believes that anti-terrorism is the new McCarthyism
	Round 8 This House Would Expand NAFTA Into South America
	Round 9 This House Would Prioritise Organ Donations To Those Who Have Lived a Healthy Lifestyle

	<h3>2004 Singapore WUDC</h3>
	Final TTH would ban the abortion of fetuses on the grounds of their permanent disability
	Semi-Final TTH believes war journalists should be forced to reveal their sources in international criminal tribunals
	Quarter Final TTH believes parents should cast proxy votes for their children
	Octo Final TTH would support regime change in Iran

	Round 1 TTHW try Saddam Hussein before an international tribunal 
	Round 2 TTH supports all forms of child labour 
	Round 3 TTHB eviormentalists should use terrorism in support of their goals 
	Round 4 TTHB students all round the world should be taught in English 
	Round 5 TTHW tie world bank aid to womens' rights 
	Round 6 TTHW make the release of child sexual abusers conditional on chemical castration
	Round 7 TTH believes only African countries should be peacekeepers in African conflicts 
	Round 8 TTH would use international sporting events for political change 
	Round 9 TTH would ban religious symbols in state schools

	ESL Final TTH believes that Japanese armed forces should fight in foreign lands
	ESL Semi TTH prefers regional trade agreements to the WTO

	<h3>2003 Stellenbosch WUDC</h3>
	Final This house believes that the world has learned nothing from 9/11
	Semi-Final This house believes that globalization is imperialism repackaged
	Quarter Final This house believes in the absolute right of the patient
	Octo Final This house believes that tobacco companies should have social responsibilities
	Round 1 This house fears an expanded Europe.
	Round 2 This house would return land to its original owners
	Round 3 This house believes that AIDS drugs should be freely available to all
	Round 4 This house believes that the media is the West's most effective weapon
	Round 5 This house believes that harmony is more important than diversity
	Round 6 This house believes that environmentalism in the Third World is the responsibility of the First World
	Round 7 This house believes that the West should accept the democratic decision of the people of Zimbabwe
	Round 8 This house believes that the US should be answerable to TRCs [Truth & Reconciliation Commissions] in South America.
	Round 9 This house believes that Sharon should stand with Milosevic

	ESL Final This House would make population control a pre-requisite of aid.
	ESL Semi This house supports Compulsory Military Service


	<h3>2003 Toronto WUDC</h3>
	<p>
		First Rounds
		1. This house would bail out failing industries.
		2. This house believes that making Yassar Arrafat a partner in peace was a mistake
		3. This house believes that the west should treat state sponsored sexism as aparthide
		4. This house believes that the WTO is the friend of the developing world
		5. This house would force feed anorexics
		6. This house believes that political assassinations are a legitimate tool of foreign policy.
		7. This house supports domestic content quotas in broadcasting
		8. This house believes that the sexual history of rape victime should be admissible in court
		9. This house believes that US foreign policy is responsible for September 11.
		Octo-Finals: This house would extradite accused criminals to face the death penalty
		Quater Finals: This house supports surrogacy for profit
		Semi-Final: This house believes that civil liberties must be restricted in the interests of security
		Final: This house would ban prisoners publishing accounts of their crimes
		ESL:
		Semi-Final: THis house believes that prisoners have no right to vote
		Final: This house believes that the Nobel Prize proves that the UN has a strong role to play
	</p>

	<h3>2001 Glasgow WUDC</h3>
	<p>
		First Rounds
		1. This house would ban criminals from voting (Cancelled due to mis times announcement)
		1b. This house would give Europe it's own Army
		2. This house would put a speed limit on human Traffic
		3. This house would make company directors criminally liable for the wrongs of their company
		4. This house believes the US should get out of the middle east
		5. This house would make pollution a tradable commodity
		6. This house would remove patents on pharmacutical drugs from the 3rd world.
		7. This house believed that the WTO should grant exemptions to developing nations
		8. This house would ban performance enhancing drugs in sport
		9. Round Cancelled. Octo-Finals: This house would outlaw genetic discrimination
		Quater Finals: This house supports a one child policy
		Semi-Final: This house would make reparations for slavery
		Final: This house would elect it's judges
		Public Speaking:
		Round 1: 5 min prep on a film quote (e.g. "Life is like a box of chocolates, you never know what you're going to get next")
		Round 2: Prepared motion: "So long as even one hundred of us remain alive, we will never submit to the rule of the English"
		Final: Impromptu

		ESL:
		Semi-Final: This house would keep peacekeepers out of civil wars
		Final: This house believes that a language which needs proteting isn't worth protecting.

		Masters:
		Final: This house would squeeze the rich until the pip squeaks
		Semi: This house believes that the rights of the child are paramount
		Quarter: This house would censor hate
	</p>

	-->
@endsection
