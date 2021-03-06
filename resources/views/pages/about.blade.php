@extends('template')

@section('title')

	About

@endsection

@section('content')

<div class="container">
        <h1>About</h1>
        <p>Search for motions by keyword, category, Chief Adjudicator or tournament. No more clicking through a bajillion sites or blog posts to find motions on feminism!</p>
        <p><a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Access the motions spreadsheet directly here</a>.</p>
    
      </div>
      
      <div class="container">
        <h2>Motion Categories</h2>
        <p><b>General:</b></p>
        <div class="row">
          <div class="col-md-4">
            <ul>
              <li>Art and Culture</li>
              <li>Business</li>
              <li>Criminal Justice System</li>
              <li>Development</li>
              <li>Economics</li>
              <li>Education</li>
              <li>Environment</li>
              <li>Family</li>
              <li>Feminism</li>
              <li>Freedoms</li>
              <li>Funny</li>
              <li>International Relations</li>
              <li>LGBT+</li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul>
              <li>Media</li>
              <li>Medical Ethics</li>
              <li>Minority Communities</li>
              <li>Morality</li>
              <li>Politics</li>
              <li>Religion</li>
              <li>Science and Technology</li>
              <li>Security, War and Military</li>
              <li>Social Policy</li>
              <li>Social Movements</li>
              <li>Sports</li>
              <li>Terrorism</li>
              <li>The Human Experience</li>
            </ul>
          </div>
        </div>  
<!--
          <p>The aim of these categories is to give an average-intelligent-voter view of what areas the debate is primarily about. I have tried to include topics that are neither too general nor too specific. 'Rights and Freedoms' is on the edge of too general, but the motions in mind for that could be focused on e.g. privacy or freedom of speech.</p>
          <p>Each motion may be included under one or two of these umbrellas. The aim of these categories is not to provide a comprehensive reading of the motion, i.e. what areas it could possibly cover, else they would be useless for filtering. E.g. I could probably tag almost every single motion with 'Economics', but then that would not help people searching for Economics motions to practice with. </p>
          <p>Note again that these are not the same as clashes. E.g. Artificial Intelligence / manipulation of genomes would both fall under Science and Technology as opposed to 'whether humans should meddle with tech'. Also, tagging clashes would be reading too much into the debate for my liking.</p>
          <p><b>Current</b>:
            EU (Sub: Eurozone Crisis)
            Islamic State (ISIS)
            Refugee Crisis
            US Politics / Trump
          </p>

          <p><b>Clashes</b>:
            Individual vs the State
            Individual vs Collective
            Present vs Future Generations
            Rights of the Individual
            Freedom of Expression / Rights
            Offloading of Responsibility
            Inequality and Redistribution
            Fairness: Minorities, Oppressed Groups
            Means vs Ends
            Definition of Happiness and Purpose, Human Experience
            Reparations (Moral, owing)
            Imposing standards
          </p>
-->
    
      </div>
      
      <div>
        <h2>Contributors</h2>
        <p>Recommendations and feedback</p>
        <ul>
          <li>Philip Belesky</li>
          <li>Raluca Velaru</li>
          <li>Filip Muki Dobranic</li>
          <li>Matt Hankin</li>
        </ul>
        <p>Motions</p>
        <ul>
          <li>Daan Welling, John Harper, Milla Huuskonen (European Debate Blog)</li>
          <li>Tuule Sober (Tartu University Debating Club)</li>
          <li>Ryan James Howson</li>
          <li>Stefan Vukojević</li>
          <li>Olivia Sundberg</li>
          <li>Dee Courtney</li>
          <li>Lamine Kane</li>
          <li>Raluca Velaru</li>
          <li>Thomas Simpson</li>
          <li>Leiden Debating Union</li>
          <li>Jevon Henry</li> <!-- Jamaica JADE Cup motions -->
          <li>Ameena Sullivan</li> <!-- Surrey IV -->
          <li>Matt Barry</li> <!-- Tourneys in Africa -->
          <li>Bexley Brown</li> <!-- NAmerica -->
          <li>Tim Squirrell</li> <!--Galway Open 2017, Sheffield IV 2016-->
          <li>Simon Sallstrom</li> <!-- Trinity IV 2017 -->
        </ul>

        <!--
        <p>Development</p>
        <ul>
          <li>Benjamin Muschol (Web Scrapers)</li>
        </ul>
        -->
      </div>


      <div class="container">
        <h2>Development Notes</h2>
        <p><a href="https://github.com/jessicayung/hello-motions.git">Github repository</a></p>
        <table class="table table-striped">
          <tr><th>Date</th><th>Notes<th></tr>

          <tr><td>15 Sept 2018</td><td><ul>
            <li>Added <a href="/ten-random-motions">Ten Random Motions</a> page: you can now load ten random motions at a time. Thanks to Assaph Hanany for prompting this. I understand that the random motions generated are not always great (or debatable) and think that adding the option to rate motions seems like a good idea, but think that will take a while to implement (if it happens at all). I have thus added this page to try to improve the experience for now. It's actually something I've wanted to do for over 2 years, so I'm very happy it's up. :)</li>
            <li>Added 2018 WUDC and EUDC motions</li>
            <li>Added 2019 Cape Town WUDC CA list.</li>
          </ul></td></tr>

          <tr><td>23 May 2017</td><td><ul>
            <li>Over 500 motions have been labelled with category tags.</li>
            <li>Over 4250 motions in database.</li>
          </ul></td></tr>

          <tr><td>X April 2017</td><td><ul>
            <li>Wrote scripts (Google AppScript) to convert motions entered via the Google Form to the Hello Motions database format. Only 1 manual checking step.</li>
          </ul></td></tr>

          <tr><td>2 Dec 2016</td><td><ul>
            <li>New feature: Added <a href="wudc-motions">a page with WUDC motions from 2007-2016</a> . The page also includes who was on the CA team for each year. You can now generate a random motion. Card format adapted from Tabbie2 website. </li>
            <li>Nearly 4000 motions on our database.</li>
          </ul></td></tr>

          <tr><td>19 Aug 2016</td><td><ul>
            <li>New feature: You can now <a href="random-motion">generate a random motion</a>. Card format adapted from Tabbie2 website. </li>
          </ul></td></tr>

          <tr><td>9 Aug 2016</td><td><ul>
            <li>New feature: You can now filter motions based on whether they are from International tournaments.</li>
          </ul></td></tr>

          <tr><td>24 Mar 2016</td><td><ul>
            <li>Over 1000 motions in our database. Woop!</li>
          </ul></td></tr>

          <tr><td>18-19 Mar 2016</td><td><ul>
            <li>Launched on Facebook!</li>
            <li>We've got more than 500 motions now (and another 3k pending formatting), keep them coming!</li>
          </ul></td></tr>

          <tr><td>17 Mar 2016</td><td><ul>
            <li>You can now search for multiple things at the same time, e.g. 'WUDC, Cambridge, Politics'. Woohoo!</li>
          </ul></td></tr>

          <tr><td>10 Mar 2016</td><td><ul>
            <li>Yay search is finally working on Laravel!</li>
            <li>Added Motions 2016 (full and mobile) and Missing Motions pages.</li>
            <li>Updated motions database.</li>
            <li>Updated index page (content).</li>
          </ul></td></tr>

          <tr><td>7 Feb 2016</td><td><ul>
            <li>Working on search form and functionality.</li>
          </ul></td></tr>
          
          <tr><td>6 Feb 2016</td><td><ul>
            <li>Site deployed to public server! Index, 2015 motions and static pages working.</li>
            <li>Fixed CSS link and padding-top problems.</li>
            <li>Fixed database query problems (wasn't compatible with Laravel).</li>
          </ul></td></tr>

          <tr><td>6 Jan 2016</td><td><ul>
            <li>Added form to submit motions directly to database instead of using Google Form.</li>
            <li>Porting to Laravel.</li>
          </ul></td></tr>

          <tr><td>13-15 Dec 2015</td><td><ul>
            <li>You can search for motions in the database (only one term at a time, mind, no ORs just yet.)</li>
            <li>Motions are displayed in a tabular format, with columns: Date, Tournament, Round, Motion.</li>
            <li>Homepage with recent motions and search field, search page.</li>
            <li>Full list of motions in 2015 (that are included in the database)</li>
            <li>About page with Motion Categories, Development Notes.</li>
            <li>Basic database and site setup on local server.</li>
            <li>Copy of temporary motion database also on <a href="https://docs.google.com/spreadsheets/d/1qQlqFeJ3iYbzXYrLBMgbmT6LcJLj6JcG3LJyZSbkAJY/edit?usp=sharing">Google Sheets</a>.</li>
          </ul></td></tr>

        </table>
        
      </div>
      <div class="container">
        <h2>New Feature Backlog</h2>
          <ul>  
            <li>Generate a Random Motion filtered by category, tournament or CA (e.g. for Worlds prep).</li>
            <li>Generate e.g. a dozen random motions at a time.</li>
            <li>Add motions to the database directly</li>
          </ul>
      </div>

@endsection
