@extends('template')

@section('title')

  WUDC Motions

@endsection

@section('content')  

  <h1>WUDC Motions</h1>

  <h3>2017 Dutch WUDC</h3>
  <p>CA Team: Syed Saddiq, Karin Merckens, Hyewon Rho, Michael Dunn Goekjian, Omer Nevo, Jodie O'Neill, Veenu Goswami, Yashodhan Nair, Ingrid Rodriguez</p>
  <p>Motions: We'll find out soon! :) For more info visit <a href="http://dutchwudc.nl/">the Dutch WUDC website</a>.</p>
  <p>
  <ul>
  	<li><a href="http://hellomotions.com/search?q=Syed+Saddiq%2C+Karin+Merckens%2C+Hyewon+Rho%2C+Michael+Dunn+Goekjian%2C+Omer+Nevo%2C+Jodie+O%27Neill%2C+Veenu+Goswami%2C+Yashodhan+Nair%2C+Ingrid+Rodriguez&intl=0">Motions set by members of the Dutch WUDC CA Team</a></li>
  	<li><a href="http://hellomotions.com/search?q=Syed+Saddiq%2C+Karin+Merckens&intl=0">Motions set by Dutch WUDC CAs</a></li>
  </ul>
  
  </p>

  <h3>2016 Thessaloniki WUDC</h3>  
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

  <h3>2015 Malaysia WUDC</h3>
  <p>CA Team: Shafiq Bazari, Jonathan Leader Maynard, Danique Van Koppenhagen, Sebastian Templeton, Engin Arikan, Brett Frazer, Madeline Schultz</p>

<!--
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
-->
  <h3>2014 Chennai WUDC</h3>
  <p>CA team: Michael Baer, Harish Natarajan, Ely Zosa, Stephen Whittington, Fiona Prowse, Michael Shapira
	</p>

<!--
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
-->

  <h3>2013 Berlin WUDC</h3>
  <p>CA Team: Sharmila Parmanand, Douglas Cochran, Victor Finkel, Isabelle Fischer, James Kilcup, Jens Fischer</p>

  <p>
  Round 1: THW create public housing for the poor in wealthy areas
  Round 2: THBT Japan should acquire nuclear weapons
  Round 3: THW only imprison individuals who pose a direct and continuing threat to society
  Round 4: THBT International development institutions (such as the World Bank) should not finance natural resource extraction projects in corrupt states
  Round 5: THBT self described progressive males of dominant ethnicities are morally obliged to refrain from taking positions of responsibility where there is a qualified alternative candidate from a historically disadvantaged group who would otherwise receive the post
  Round 6: THW legally permit soldiers to refuse to participate in military actions or missions on the basis of conscience
  Round 7: THBT European Union nations should forgive Greece’s sovereign debt
  Round 8: THBT countries with booming populations should allocate every adult a single tradable permit to have a child
  Round 9: THW ban political parties and require all candidates for national public office to seek election as independents

  English as a foreign language (EFL) breaking rounds motions:
  Quarter Finals THBT publicly funded universities should be required to reduce enrolment in degree programs within their university that have statistically poor employment outcomes
  Semi Finals THBT policies that may have significant environmental consequences should be subject to a veto by a 'supreme court' of scientific experts
  Final This House welcomes the decline of the USA as the sole global super power.

  English as a second language (ESL):
  Quarter Finals: THBT publicly funded universities should be required to reduce enrolment in degree programs within their university that have statistically poor employment outcomes
  Semi Finals: THBT the feminist movement should actively promote norms of stable monogamous relationships
  Grand Final: THBT representative democracies with large numbers of foreigners living in their territory (on temporary or permanent basis) should create specific seats to represent them in parliament.

  Partial Double Octo Finals THBT universities should never prohibit research or teaching on the grounds of sexist, racist or otherwise discriminatory implications

  Main break motions:
  Octo Finals: THBT the US should cut off military aid to Egypt
  Quarter Finals: THW ban all advertising of consumer goods and services
  Semi Finals: TBHT the WTO should never allow nations to place export restrictions on food, rare-earth metals, and other non-oil commodities
  Grand Final: THW not allow religious communities to expel members on the basis of views or actions that contradict doctrinal teachings


  </p>

  <h3>2012 Manila WUDC</h3>
  <p>CA Team: Sam Block, Lucinda David, Joe Roussos, Tim Mooney, Cormac Early, Masako Suzuki, Art Ward</p>
  <p>Prelim Rounds:

	Round 1: THW make fathers take paternity leave.
	Round 2: THW prevent politicians from making fact claims,that, while not technically lies, are substantially misleading voters.
	Round 3: THW force large companies who leave an area to pay the costs of any resulting structural unemployment.
	Round 4: THW require individuals to use all their wealth beyond USD 5 millions for philanthropic projects.
	Round 5: THW require deaf parents to send their kids (whether deaf/hearing) to mainstream schools for their primary & secondary education.
	Round 6: TH supports politicians who pass progressive legislation even when it is contrary to the wishes of the democratic electorate.
	Round 7: TH supports the free movement of labour worldwide.
	Round 8: THW exempt academic disputes from defamation law.
	Round 9: THW ban all private healthcare in favour of a comprehensive public healthcare system.

	Break Rounds:
	Main :
	Octo Finals: THW not allow a single media company to own multiple TV channels or newspapers (whether in print or online)
	Quarter Final: THBT "Western" consultants advising dictatorships have a moral duty to sabotage them.
	Semi Final: THBT images designed to even slightly sexually attract/aroused viewer should be restricted to specialist adult site/xxx domain.
	Final: TH supports nationalism.


	English as a second language (ESL):

	Quarter Final: THW limit Government ministers' standard of living to that of someone on the current median wage.
	Semi Final: In countries with few female politicians, this house believes it is good to have a politically active 'first lady'
	Grand Final: THS scientist who fabricate evidence exaggerating certainty of man-made climate change where there is low likelihood of being caught.

	English as a foreign language (EFL):

	Semi Final: THBT when doctors discover a patient has a STD, they should reveal that information to the patients partner.
	Grand Final: ???

	Other Motions:
	Master R1: THW stop public funding for the post secondary education and use the money to give everyone an equal loathsome payment on their 18th Birthday to use how they see fit.
	Adj Test: THW ban all reporting of individual hostage taking.
	Public Speaking: Why I debate?
	Women's Night Motion: THW only sell porn for women made by women.
	</p>

	<h3>2011 Botswana WUDC</h3>
	<p>CA Team: Logandran Balavijendran, Pearl Mathumo, James Dray, Anat Gelber, Richard Lizius, Tim Jeffrie
	</p>
	<!--From http://idebate.org/node/7365-->

	<p>
		Rd1: This house believes that national sporting teams should reflect the diversity of the national population
		Rd2: This house believes that all states have a right to nuclear weapons
		Rd3: This house believes that governments should not provide benefits on the basis of marital status
		Rd4: This house believes that central banks should set limits on government spending
		Rd5: This wouse would prioritise asylum Seekers who have engaged in armed struggle against oppressive regimes
		Rd6: This wouse would allow teachers unions the right to strike
		Rd7: This wouse would require individuals to reveal their actual identity when communicating on the internet
		Rd8: This house believes that the southern african development community (SADC) should pursue political union
		Rd9: This house believes that social movements should use the courts rather than the legislature to advance social change
		Octo: This wouse would buy countries votes in nternational organizations
		Qtr: This house believes that courts should not enforce wills that discriminate on the basis of race Semi: This house opposes organised religion
		Final: This wouse would invade Zimbabwe
		EFL Semi: This house supports a one state solution for the Israeli-Palestinian conflict
		EFL Final: This wouse would give more votes to the poor
		ESL Qtr: This house believes that domestic courts should try foreign nationals who commit war crimes abroad
		ESL Semi: This wouse would prefer that the children of racial minorities be adopted by parents of that race
		ESL Final: This house believes that the courts should break up consistently dominant political parties
		Masters Rd1: This wouse would buy local
		Masters Final: This house prefers a philosopher King to a tyrannical democracy

	</p>

	<h3>2010 Vehbi Koc WUDC</h3>
	<p>CA Team: Can Okar, Josh Bone, Julia Bowes, Suthen Tate Thomas, Will Jones, Handan Orel, Ozan Mert Ondes.</p>
	<!-- http://worlddebating.blogspot.co.uk/2009/12/koc-wudc-debating-guide-speaker-scale.html-->

	<p>
		Round 1
		This house would ban labour unions.

		Round 2
		This house believes that developing nations should pay for the full tuition of female university students.

		Round 3
		This house would financially incentivize both inter-faith and inter-ethnic marriages.

		Round 4
		THW prohibit high-ranking members of the Sri Lankan military and the Tamil Tigers from participation in the election.

		Round 5
		THW abolish taxes on alcohol and cigarettes that go beyond normal sales taxes.

		Round 6
		THW prosecute communities for complicity in honour killings.

		Round 7
		THW grant those diagnosed with terminal illnesses the right to access treatments that have not completed clinical testing.

		Round 8
		THW partition Sudan.

		Round 9
		THW ban all pornography.

		EFL Semifinals
		This House would use faith based rehabilitation in prison.

		EFL Final
		This House believes that democratic states should own their own broadcasting corporations.

		ESL Quarterfinals
		This House would ban any scheme intended to cure homosexuality

		ESL Semifinals
		This house would allow prisoners to raise their babies behind bars.

		ESL Final
		This house would prohibit expression that portrays convicted war criminals in a positive light.

		Octofinals
		This house believes the West should recognise the Dali Lama

		Quarterfinals
		This house would ban all procedures to alter one's racial appearance.

		Semifinals
		THB that the United States government should subsidize Twitter to liberalize oppressed societies

		Grand Final
		THB that the media should show the full horror of war
	</p>

	<h3>2009 Cork WUDC</h3>
	<p>CA Team: Derek Lande, Erin O'Brien, Ivan Ah Sam, Rory Gillis, Daniel Patrick McCarthy</p>
	<p>
		Final : That this house would allow abortion at all stages of pregnancy
		Semi Final: This house believes governments should subsidise private home ownership.
		Qtr Final: This house believes that the international criminal court should prosecute crimes against the democratic process.
		Octo Final: This house would arm local militia to fight the taliban in Afghanistan.
		ESL Final: This house would implement quotas for domestic players in national football leagues.
		EFL Final: This house would prohibit all private health care.
		Round 9: This house would ban the publication of political opinion polls.
		Round 8: This house would apply a lower rate of income tax to women.
		Round 7: This house believes that the west should recognise the independence of Abkhazia.
		Round 6: This house would criminalise adultery.
		Round 5: This house believes that China and India should bear the same obligations as the West in fighting climate change
		Round 4: This house would force the religious desegregation of Northern Irish schools.
		Round 3: This house would allow soldiers to sue their government for negligence.
		Round 2: This house would fire the senior managements of all corporations which receive government bailouts.
		Round 1: This house would ban all forms of gambling.
		Womens Debate: This house would ban all forms of religious gender discrimination.
		Adj Test: This house would allow insurance companies to view genetic test results in assessing potential customers.
	</p>

	<h3>2008 Assumption WUDC</h3>
	<p>CA Team: Rajesh Krishnan, Ciaran Lawlor, Beth O’Connor, Joanna Nairn</p>
	<!--CA info from http://worlddebating.blogspot.co.uk/2008/01/full-results-from-worlds-2008.html-->

	<p>
	Preliminary Rounds:
	Round 1: This House would allow the use of torture.
	Round 2: This House believes that Taiwan should declare independence now
	Round 3: THW not allow local government to pay for the relocation of homeless people.
	Round 4: This House believes that the European Union should only direct aid to nations that pursue environmentally sustainable development.
	Round 5: This House believes that every criminal defendant should be required to use a government provided defense lawyer.
	Round 6: THW subject foreign political contributions to greater restrictions than domestic contributions.
	Round 7: This House would assassinate Vladimir Putin.
	Round 8: THB that governments should never rescue failing private industry.
	Round 9: This House would deny scarce medical resources to terminally ill patients.

			
	Break rounds
	Octofinals: THB that governments in the developing world should invest in sex tourism.
	Quarterfinals: This House would force religious adoption agencies to place children with homosexual couples.
	Semifinals: THB that extreme economic need should be grounds for asylum.
	Final: THB that people who give HIV to others must pay drug support.

	ESL
	Octofinals: This House would support the use of mercenaries by the United Nations.
	Quarterfinals: This House would force religious adoption agencies to place children with homosexual couples.
	Semifinals: This House would require doctors to report all cases of suspected domestic violence.
	Final: This house believes that the Turkish military should stop enforcing the separation of church (mosque) and state

	EFL
	Final: This house would eliminate all non state-run schools

	Masters
	Round 1: This house regrets the passing of Bhutto
	Round 2: This house would stop the search for the gay gene
	Round 3: This house would let them eat whale
	Final: This house would put an age limit on debating
	</p>

	<h3>2007 UBC WUDC</h3>
	<p>CA Team: Kevin Massie, Derek Lande, Tim Sonnreich, Alex Deane</p>
	<!-- CA Team info from idebate.org -->

	<p>
		Final This house believes that economic growth is the solution to climate change
		Semi Final This house would ban websites that glorify eating disorders
		Qtr Final This house believes that people sentenced to life imprisonment should be allowed to choose the death penalty instead
		Octo Final This house believes that developing nation should nationalize their energy resources
		Round 9 This house would grant citizenship in exchange for military service
		Round 8 This house would ban Cosmetic Surgery
		Round 7 This house would support regime change in Myanmar/Burma
		Round 6 This house would abolish all taxes on inherited wealth
		Round 5 This house supports independence for Quebec
		Round 4 This house would criminalize the payment of ransom
		Round 3 This House supports accelerated land redistribution in South Africa
		Round 2 This house believes that the UK should abolish it’s nuclear arsenal
		Round 1 This house would ban government funding of religious schools
		ESL Final

		This house believes that politicians have a right to a private life

		ESL Semi This house believes all serious crimes should be trialed by Jury
		Masters Final This house supports a 35 hour working week
		Masters Round 1 This house would designate one city to permanently host the Olympics
		Masters Round 2 This house believes that governments should provide heroin addicts with safe injection facilities
		EFL Final 
		This house would lift sanctions on Iran
	</p>

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
@endsection
