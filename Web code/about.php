<!doctype html>
<html lang='en'>
 
    <?php 
      // This is used so I don't have to copy repetitive HTML code (that may change over time)
      // To every single web page. It's a maintenance nightmare.
      //
      // It just inserts the contents of a separate HTML file called head.html 
      // That file has the meta tags for SEO, links to Bootstrap libraries and
      // the custom stylesheet, it loads my javascript file, and stuff for the Favicon

      include 'assets/head.html';
    ?> 

    <link rel=“canonical” href=“https://bioriskreduction.com/about.php”>

    <title>About Us</title>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D84576P2N6"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());
      gtag('config', 'G-D84576P2N6');
    </script>  
        
  </head>
  <body>

    <header id='header' class='site-navbar container-fluid sticky-top' role='banner'>
      <?php 
        // This is used so I don't have to copy repetitive HTML code to every single web page. 
        // header.html is the page header code including the main menu

        include 'assets/header.html';
      ?> 
      
      <!-- The JavaScript function below reads the page title attribute to put on the tab for the web page -->
      <script>activePage();</script>  

    </header>

    <main class='about container-fluid'>

      <!-- Almost all the rest of the code on this page is simple HTML stuff. A lot of the classes I use
           for styling are from the Bootstrap library. A lot of them are only there to make the page
           responsive to different screen sizes (like 'col-sm-12 col md-4 col-lg-3' - that tells how
           that section of information should be formatted on 3 different screen sizes). The 'container-fluid'
           (and other classes that end in '-fluid') are also Bootsrap classes telling the page that that
           section should behave responsively to different screen sizes.

           The classes like 'leadership-team-container' I developed to style the different classifications
           of people associated with the business. For most of these classes, the only difference is the 
           background color.

           I have commented out a bunch of stuff on the Leadership team "tiles". That displayed an "expand" icon
           on those tiles to display/hide a considerable amount of extra information. We are probably 
           going to change how it works but I didn't want to lose it yet.

           The information displayed for each person is usually sent to me via Slack from Paula, including
           a good picture of that person. I do some simple editing of the picture in MS Paint to get a uniform
           aspect ratio and try to zoom in for a head shot, then save the image at a lower resolution so the
           web page loads faster.
      -->

      <h1>About BioRisk Reduction</h1>

      <h2>Statement of Purpose</h2>
      <p>
        Our aim is to decrease the risk of infectious disease transmission within communities due to known 
        and unknown vulnerabilities. 
        <br><br>
        Our advice is always honest, ethical, scientifically justified, and responsible, while accounting 
        for the clients' needs to maintain operations.
        <br><br>
        We understand that each client has unique needs and requires creative controls to maintain operations as 
        desired while maintaining a safe environment. This includes but is not limited to facilities, PPE, 
        leadership training, and protocol/behavioral-based safety. We not only build increased environmental 
        infectious disease safety but also teach and empower our clients to keep improving safety. This is 
        achieved through our collaborative client-consumer process and our custom education and training offerings.
      </p>
      <hr />
      <h2>Leadership Team</h2>
      
      <div class="container-fluid leadership-team-container">
        <div class='row'>
          <div class='col-sm-12 col-md-4 col-lg-3'>
            <img src="images/about/ryan-mcallister.png" alt="Doctor Ryan Mcallister" width='200' height='200'>
          </div>  
          <div class='col-sm-12 col-md-8 col-lg-9'>
            <h3>Dr. Ryan McAllister</h3>
            <h4>President, CEO, Founder</h4>
            <h4>California, USA</h4>
              <p>
              Ph.D. Pharmacology &amp; Toxicology - University of Louisville<br>
              M.S. Pharmacology &amp; Toxicology - University of Louisville<br>
              B.S. Biochemistry - Northern Michigan University<br><br>
              Qualified Biosafety Professional, BioRisk Reduction<br>
              BioRisk Reduction Instructor<br>
              Registered Biosafety Professional Credential - The American Biological Safety Association International (ABSA)<br>
              Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)
            </p>

<!--             <div class='chev-down-style' role='button' id='ryandownchev' onclick='unhide("ryan")'>
              <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                    class="icon icon-tabler icon-tabler-chevron-down" aria-labelledby='ryandown'
                    width="40" height="40" viewBox="0 0 24 24" 
                    stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                    stroke-linecap="round" stroke-linejoin="round">
                <title id='ryandown'>A down arrow to open up more content</title>
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div> -->

            <!-- text originally hidden and opened/closed with chevrons -->
<!--             <p class='about-hidden' id='ryan'>
              <br>
              Qualified Biosafety Professional, BioRisk Reduction<br>
              BioRisk Reduction Instructor<br>
              Registered Biosafety Professional Credential - The American Biological Safety Association International (ABSA)<br>
              Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)

              <div class='chev-up-style' role='button' id='ryanupchev' onclick='hide("ryan")'>
                <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                      class="icon icon-tabler icon-tabler-chevron-up" aria-labelledby='ryanup'
                      width="40" height="40" viewBox="0 0 24 24"
                      stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                      stroke-linecap="round" stroke-linejoin="round">
                  <title id='ryanup'>An up arrow to close the additional content</title> 
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <polyline points="6 15 12 9 18 15" />
                </svg>
              </div>
            </p> -->
                          
          </div>
        </div>
      </div>

      <div class="container-fluid leadership-team-container">
        <div class='row'>
          <div class='col-sm-12 col-md-4 col-lg-3'>
            <img src="images/about/dylan-johnson.png" alt="Doctor Dylan Johnson" width='200' height='200'>
          </div>  
          <div class='col-sm-12 col-md-8 col-lg-9'>
            <h3>Dr. Dylan Johnson</h3>
            <h4>Co-Founder</h4>
            <h4>Texas, USA</h4>
            <p>
              Ph.D. Microbiology &amp; Immunology - University of Louisville<br>
              M.S. Microbiology &amp; Immunology - University of Louisville<br>
              M.S. Biology - Indiana State University<br>
              B.S. Microbiology - University of Hawaii<br><br>
              Qualified Biosafety Professional, BioRisk Reduction<br>
              BioRisk Reduction Instructor<br>
              Guy Stevens Award for Excellence in Graduate Studies - University of Louisville’s highest award for a doctoral student              
            </p>

<!--             <div class='chev-down-style' role='button' id='dylandownchev' onclick='unhide("dylan")'>
              <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                    class="icon icon-tabler icon-tabler-chevron-down" aria-labelledby='dylandown'
                    width="40" height="40" viewBox="0 0 24 24" 
                    stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                    stroke-linecap="round" stroke-linejoin="round">
                <title id='dylandown'>A down arrow to open up more content</title>
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div> -->

            <!-- text originally hidden and opened/closed with chevrons -->
<!--             <p class='about-hidden' id='dylan'>
            <br>
              Qualified Biosafety Professional, BioRisk Reduction<br>
              BioRisk Reduction Instructor<br>
              Guy Stevens Award for Excellence in Graduate Studies - University of Louisville’s highest award for a doctoral student -->

<!--               <div class='chev-up-style' role='button' id='dylanupchev' onclick='hide("dylan")'>
                <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                      class="icon icon-tabler icon-tabler-chevron-up" aria-labelledby='dylanup'
                      width="40" height="40" viewBox="0 0 24 24"
                      stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                      stroke-linecap="round" stroke-linejoin="round">
                  <title id='dylanup'>An up arrow to close the additional content</title>     
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <polyline points="6 15 12 9 18 15" />
                </svg>
              </div> -->
 <!--            </p> -->
                          
          </div>
        </div>
      </div>

      <div class="container-fluid leadership-team-container">
        <div class='row'>
          <div class='col-sm-12 col-md-4 col-lg-3'>
            <img src="images/about/vicente-martinez.png" alt="Doctor Vicente Martinez" width='200' height='200'>
          </div>  
          <div class='col-sm-12 col-md-8 col-lg-9'>
            <h3>Dr. Vicente Martinez</h3>
            <h4>Co-Founder</h4>
            <h4>Asunci&oacute;n, Paraguay</h4>
            <p>
              Ph.D. Biomedical Sciences (Molecular Virology) - Tokyo Medical and Dental University (Japan)<br>
              B.S. Biology - National University of Asunci&oacute;n (Paraguay)<br><br>
              BioRisk Reduction Instructor
            </p>

<!--             <div class='chev-down-style' role='button' id='vicentedownchev' onclick='unhide("vicente")'>
              <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                    class="icon icon-tabler icon-tabler-chevron-down"  aria-labelledby='vicentedown'
                    width="40" height="40" viewBox="0 0 24 24" 
                    stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                    stroke-linecap="round" stroke-linejoin="round">
                <title id='vicentedown'>A down arrow to open up more content</title>    
                <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                <polyline points="6 9 12 15 18 9" />
              </svg>
            </div>
 -->
            <!-- text originally hidden and opened/closed with chevrons -->
<!--             <p class='about-hidden' id='vicente'>
            <br>
              BioRisk Reduction Instructor

              <div class='chev-up-style' role='button' id='vicenteupchev' onclick='hide("vicente")'>
                <svg  xmlns="http://www.w3.org/2000/svg" focusable="false" role='img'
                      class="icon icon-tabler icon-tabler-chevron-up" aria-labelledby='vicenteup'
                      width="40" height="40" viewBox="0 0 24 24"
                      stroke-width="2.5" stroke="#a9a9a9" fill="none" 
                      stroke-linecap="round" stroke-linejoin="round">
                  <title id='vicenteup'>An up arrow to close the additional content</title>         
                  <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                  <polyline points="6 15 12 9 18 15" />
                </svg>
              </div>
            </p> -->
                          
          </div>
        </div>
      </div>

      <div class="container-fluid leadership-team-container">
        <div class='row'>
          <div class='col-sm-12 col-md-4 col-lg-3'>
            <img src='images/about/whitney--martin.png' alt='Whitney Martin' width='200' height='200'>
          </div>  
          <div class='col-md-9'>
            <h3>Whitney Martin</h3>
            <h4>Marketing Director</h4>
            <h4>California, USA</h4>
            <p>
              B.A. General Academics - Indiana University Purdue University Indianapolis
            </p>
          </div>
        </div>
      </div>

      <hr />



      <h2>Team Members</h2>              

          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/fadwa-fathy.png" alt="Doctor Fadwa Fathy Mahmoud Mohammed" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Fadwa Fathy Mahmoud Mohammed</h5>
                <h5>Ismailia, Egypt</h5>
                <p>
                  Ph.D. Veterinary Medical Science - Suez Canal University (Egypt)<br>
                  M.S. Veterinary Medical Science - Suez Canal University<br>
                  B.S Veterinary Medicine - Suez Canal University<br>
                  <br>
                  BioRisk Reduction Instructor<br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)<br>
                  Professional Certification in Biosecurity - The International Federation of Biosafety Associations (IFBA)
                </p>
              </div>
            </div>
          </div>

          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/ryan-houser.png" alt="Ryan Houser" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Ryan Houser</h5>
                <h5>New Jersey, USA</h5>
                <p>
                  E.M.P.S. - Emergency and Disaster Management - Georgetown University<br>
                  M.S. Biohazardous Threat Agents and Emerging Infectious Diseases - Georgetown University<br>
                  M.S. Forensic Psychology - Southern New Hampshire University<br>
                  M.S. Healthcare Emergency Management - Boston University Medical School<br> 
                  B.A. Psychology - Rutgers University
                  Graduate Certificate Advanced Counterterrorism and Homeland Security - Southern New Hampshire University<br>
                  <br>
                  State Emergency Medical Technician – New Jersey State<br>
                  National Registry Emergency Medical Technician<br>
                  Firefighter 1, Morris County Public Safety Training Academy<br>
                  BLS Provider – American Heart Association
                </p>
              </div>
            </div>
          </div>

          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/hayley-meijer.png" alt="Hayley Meijer" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Hayley Meijer</h5>
                <h5>North Carolina, USA</h5>
                <p>
                  M.P.H. - Milken Institute School of Public Health, George Washington University<br>
                  B.A. Biology, Medicine, Literature and Culture - the University of North Carolina at Chapel Hill
                </p>
              </div>
            </div>
          </div>
          
          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/abner-linares.png" alt="Abner Linares" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Abner Linares</h5>
                <h5>Arizona, USA</h5>
                <p>
                  M.P.H., Health Services Administration - University of Arizona<br>
                  B.S. Cellular &amp; Molecular Biochemistry - University of Texas
                </p>
              </div>
            </div>
          </div>
          
          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/pankaj-mehrotra.png" alt="Doctor Pankaj Mehrotra" width='170' height='170'>
              </div>
              <div class='col-md-9'>
                <h5>Dr. Pankaj Mehrotra</h5>
                <h5>Delhi, India</h5>
                <p>
                  Ph.D. Medical Sciences - University of Aberdeen (Scotland)<br>
                  M.S. Integrative Genomics - Black Hills State University<br>
                  B.S. Applied Zoology - University of Delhi (India)<br>
                  <br>
                </p>
              </div>
            </div>
          </div>

          <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/matt-gallman.png" alt="Matthew Gallman" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Matthew Gallman</h5>
                <h5>Oklahoma, USA</h5>
                <p>
                  M.S. Biotechnology - Johns Hopkins University<br>
                  B.S. Chemistry - Oklahoma State University<br>
                  <br>
                  Certified Biological Safety Professional Credential - The American Biological Safety Association International (ABSA)<br>
                  Certified Safety Professional Credential - Board of Certified Safety Professionals<br>
                  Qualification in Laboratory Safety Credential - American Society for Clinical Pathology<br>
                  BioRisk Reduction Instructor
                </p>
              </div>
            </div>
          </div>

      <div class='team-container team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/scott-adcock.png" alt="Scott Adcock" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Scott Adcock</h5>
                <h5>Kentucky, USA</h5>
                <p>
                  B.S. Biology - University of Kentucky 
                </p>
              </div>
            </div>
          </div>

      <hr />


      <h2>Associate Team Members</h2>              

      <div class="container-fluid">
        <div class='row'>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/patricia-obregon.png" alt="Doctor Patricia Obregón" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Patricia Obreg&oacute;n</h5>
                <h5>Madrid, Spain</h5>
                <p>
                  PhD. Biochemistry and Molecular Biology - Universidad Complutense de Madrid, Spain. National Center of 
                  Biotechnology - Spanish National Research Council (CNB - CSIC)<br>
                  B.S. Life Sciences (Molecular Biology) - Universidad Complutense de Madrid (Spain)
                  <br><br>
                  Certified in Advanced Biosafety “Competence of the Professional in Biosafety” (CSIC)- UNE-CWA 16335:2014<br> 
                  Certified in Chemical, Biological, Radiological &amp; Nuclear (CBRN) Risks Defence - Spanish M. of Defence, Madrid<br>
                  Member of the Directive Board of AEBioS<br>
                  Biosafety Coordinator for the state sero-epidemiology study ENE-COVID during the Covid-19 pandemic in Spain (Ministry of Health)<br>
                  Organizer and director of the "I National Workday" on Biosafety for hospitals and the healthcare field in Spain, April 2019<br>
                  BioRisk Reduction Instructor  
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/francisco-palomo.png" alt="Fco. Javier García Palomo" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Fco. Javier Garc&iacute;a Palomo</h5>
                <h5>Salamanca, Spain</h5>
                <p>
                  B.S. Biochemistry - Universidad de Salamanca (Spain)<br>
                  <br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)<br>
                  President of Asociaci&oacute;n Espa&ntilde;ola de Bioseguridad (AEBioS) (2018-2021)<br>
                  BioRisk Reduction Instructor  
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/daniel-hall.png" alt="Doctor Daniel Hall" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Daniel Hall</h5>
                <h5>Florida, USA</h5>
                <p>
                  M.D. University of Louisville<br>
                  B.S. Mathematics - Wittenburg University<br>
                  &nbsp;<br>&nbsp;
                </p>
              </div>                                  
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/david-duncan.png" alt="Doctor David Duncan" width='170' height='170'>
              </div>
              <div class='col-md-9'>
                <h5>Dr. David Duncan</h5>
                <h5>California, USA</h5>
                <p>
                  M.D. University of Louisville<br>
                  B.S. Biology - University of Florida<br>
                  <br>
                  Captain - U.S. Air Force
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/nasir-abbas.png" alt="Doctor Nasir Abbas" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Nasir Abbas</h5>
                <h5>Abbottabad, Pakistan</h5>
                <p>
                  Ph.D. Microbiology - Hazara University (Pakistan)<br>
                  D.V.M. University of Veterinary &amp; Animal Sciences (Pakistan)<br>
                  M.S. Microbiology - Hazara University<br>
                  <br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)            
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/sean-umamoto.png" alt="Doctor Sean Umamoto" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Sean Umamoto</h5>
                <h5>California, USA</h5>
                <p>
                  Ph.D. Comparative Biology - University of California, Berkeley<br>
                  B.A. Microbiology and Immunology - University of California, Berkeley
                </p>
              </div>                  
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/andrew-lepelusa.png" alt="Doctor Andrew Le'Pelusa" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Andrew Le'Pelusa</h5>
                <h5>California, USA</h5>
                <p>
                  M.D. Doctor of Medicine - Wright State University<br>
                  M.S. Pharmacology and Toxicology - Wright State University<br>
                  B.S. Biology - Morehouse College<br><br>
                  Captain - U.S. Army<br>
                  National Guard  
                </p>
              </div>                  
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/john-adlish.png" alt="Doctor John Adlish" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. John Adlish</h5>
                <h5>Nevada, USA</h5>
                <p>
                  Ph.D. Cell and Molecular Biology -  University of Nevada, School of Medicine<br>
                  B.S. Biology - University of Nevada  
                </p>
              </div>                  
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/Evans Daniel.png" alt="Daniel Evans" width='170' height='170'>
              </div>
              <div class='col-md-9'>
                <h5>Daniel Evans</h5>
                <h5>California, USA</h5>
                <p>
                M.S. Infectious Diseases and Microbiology - University of Pittsburgh Graduate School of
                Public Health<br>
                B.S. Biological Sciences - Carnegie Mellon University
                <br><br>
                Certified in Infection Control (CIC) - Certification Board in Infection Control and 
                Epidemiology<br>
                Registered Environmental Health Specialist/Registered Sanitarian (REHS/RS) - 
                National Environmental Health Association<br>
                Certified in Public Health (CPH) - National Board of Public Health Examiners<br>
                Delta Omega Honorary Society in Public Health - Inducted 2021<br>
                Armed Forces Service Medal - Awarded 2021
                <br><br>
                Medical Service Corps Officer, Pennsylvania Army National Guard (Active)
                &nbsp;<br>&nbsp;
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/Tigran-Lucian Mandalian - Tigran-Lucian Mandalian.png" alt="Tigran Mandalian" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Tigran Mandalian</h5>
                <h5>Vrancea, Romania</h5>
                <p>
                  M.D. University of Louisville<br>
                  B.S. Mathematics - Wittenburg University<br>
                  &nbsp;<br>&nbsp;
                </p>
              </div>                                  
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/kristin-king.png" alt="Doctor Kristin King" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Kristin King</h5>
                <h5>Texas, USA</h5>
                <p>
                  Dr.PH. Environmental and Occupational Health Sciences – The University of Texas Health Science Center at Houston<br>
                  M.P.H. Environmental and Occupational Health Sciences – The University of Texas Health Science Center at Houston<br>
                  B.S. Microbiology – The University of Texas Austin<br>
                  <br>
                  Certified Biological Safety Professional - The American Biological Safety Association International (ABSA)<br>
                  Certified Infection Prevention Certification - Board of Infection<br>
                  BioRisk Reduction Instructor
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/fatima-aziz.png" alt="Doctor Fatima Aziz" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Fatima Aziz</h5>
                <h5>Karachi, Pakistan</h5>
                <p>
                  Ph.D. Virology - University of Karachi (Pakistan)<br>
                  M.S. Biotechnology - University of Karachi<br>
                  <br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/ekaterina-semenyuk.png" alt="Doctor Ekaterina Semenyuk" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Ekaterina Semenyuk</h5>
                <h5>Indiana, USA</h5>
                <p>
                  Ph.D. Biology - Lomonosov Moscow State University<br>
                  M.S. Biochemistry/Molecular Biology - Pushchino University (Moscow Region, Russia)<br>
                  B.S. Biology - Kubansky State University (Krasnodar, Russia)<br>
                  <br>
                  Registered Biosafety Professional - The American Biological Safety Association International (ABSA)
                </p>
              </div>
            </div>
          </div>
         
          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/imane-belkourati.png" alt="Doctor Imane Belkourati" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Imane Belkourati</h5>
                <h5>Rabat, Morocco</h5>
                <p>
                  DVM - Hassa II Institute of Agronomy & Veterinary Medicine (Morocco)<br>
                  <br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)<br>
                  Professional Certification in Biosecurity - The International Federation of Biosafety Associations (IFBA)
                </p>
              </div>
            </div>
          </div>

          <div class='team-container assoc-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/michael-read.png" alt="Michael Read" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Michael Read</h5>
                <h5>Ohio, USA</h5>
                <p>
                  Post Graduate Certificate, Medical Laboratory Technology - George Washington University<br>
                  Bachelor of Science, Microbiology - Louisiana State University<br>
                  <br>
                  Medical Laboratory Technologist - American Society for Clinical Pathology<br>
                </p>
              </div>
            </div>
          </div>


        </div> <!--end of .row-->

      </div> <!--end of .container-fluid-->

      <hr />



      <h2>Community Team Members</h2>              

      <div class="container-fluid">
        <div class='row'>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/keith-cox.png" alt="Keith Cox" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Keith Cox</h5>
                <h5>Kentucky, USA</h5>
                <p>
                  B.A. General Academics - University of Louisville<br>
                  <br>
                  Sergeant - Louisville Fire Department (Retired)
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/peter-posada.png" alt="Peter Posada" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Peter Posada</h5>
                <h5>California, USA</h5>
                <p>
                  M.A. Leadership & Public Safety - University of San Diego<br>
                  B.A. Administration of Justice - California State University<br>
                  <br>
                  Police Sheriff 
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/mia-crisafulli.png" alt="Mia Crisafulli" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Mia Crisafulli</h5>
                <h5>New York, USA</h5>
                <p>
                  B.A. Biology - University of Vermont
                  <br><br>
                  Certified Research Coordinator – CITI<br>
                  IRB certification in good clinical practice – CITI<br>
                  AED/CPR certified - American Red Cross
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src='images/about/lauren-stalzer.png' alt='Lauren Stalzer' width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Lauren Stalzer</h5>
                <h5>New York, USA</h5>
                <p>
                  B.S. - Quinnipiac University
                  <br><br>
                  Paramedic - NYS
                  National Paramedic - NREMT
                </p>
              </div>
            </div>
          </div>         

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src='images/about/faizan-ahmad.png' alt='Faizan Ahmad' width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Faizan Ahmad</h5>
                <h5>Abbottabad, Pakistan</h5>
                <p>
                  M.Phil. Microbiology - Abbottabad University of Science and Technology, Pakistan
                  <br><br>
                  Social Media Marketing and Brand Development Intern
                </p>
              </div>
            </div>
          </div> 
          
          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src='images/about/OliviaKeller - Olivia Keller.png' alt="Olivia Keller" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Olivia Keller</h5>
                <h5>Pennsylvania, USA</h5>
                <p>
                B.S. Neuroscience - Muhlenberg College
                <br><br>
                  Social Media Marketing and Brand Development Intern
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/mohammad-dwairi.png" alt="Mohammad A. Dwairi" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Mohammad A. Dwairi</h5>
                <h5>Irbid, Jordan</h5>
                <p>
                  B.S. Applied Chemical Science - Jordan University of Science and Technology
                  <br><br>
                  Professional Certification in Biorisk Management - The International Federation of Biosafety Associations (IFBA)<br>
                  Professional Certification in Biosecurity - The International Federation of Biosafety Associations (IFBA)<br>
                  <br>
                  Biosecurity Fellowship Mentor - American Society for Microbiology (ASM)  
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/jeff-payne.png" alt="Doctor Jeff Payne" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Dr. Jeff Payne</h5>
                <h5>Florida, USA</h5>
                <p>
                  Ph.D. Security Studies - University of Central Florida<br>
                  M.S. Criminal Justice - University of Central Florida<br>
                  B.S. Criminal Justice - University of Central Florida<br>
                  <br>
                  Police Sheriff
                </p>
              </div>
            </div>
          </div>

          <div class='team-container comm-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/ravikumar-tummalacharla.png" alt="Ravikumar Tummalacharla" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Ravikumar Tummalacharla</h5>
                <h5>Hyderabad, India</h5>
                <p>
                  B. Tech (Mech. Engineering) - Rajeev Gandhi Memorial College of Engineering and Technology (India)
                </p>
              </div>
            </div>
          </div>
          
      <hr />


      <h2>Support Team Members</h2>              

      <div class="container-fluid">
        <div class='row'>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/paula-mcallister.png" alt="Paula McAllister" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Paula McAllister</h5>
                <h5>Administration Assistance</h5>
                <h5>Michigan, USA</h5>
                <p>
                  
                </p>
              </div>
            </div>
          </div>        

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/bob-lipscomb.png" alt="Bob Lipscomb" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Bob Lipscomb</h5>
                <h5>Website Design</h5>
                <h5>Michigan, USA</h5>
                <p>
                  B.S. Electrical Engineering - General Motors Institute<br>
                  M.B.A. Management - Miami University (Ohio)
                </p>
              </div>
            </div>
          </div>
		
		   <div class='team-container support-team-member'>
            <div class='row'>
              <div class='col-md-3'>
                <img src="images/about/bryce-poehlitz.png" alt="Bryce Poehlitz" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Bryce Poehlitz</h5>
                <h5>Graphic Design Intern</h5>
                <h5>Oregon, USA</h5>
                <p>
                  B.A. Design and Visual Communications - Western Oregon University
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/tara-harvey-ingram.png" alt="Tara Harvey-Ingram" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Tara Harvey-Ingram</h5>
                <h5>Graphic Design Intern</h5>
                <h5>New York, USA</h5>
                <p>
                  B.F.A. Interactive Media & Game Design - Fashion Institute of Technology<br>
                  A.A. Animation, Interactive Technology, Video Graphics and Special Effects - Borough of Manhattan Community College<br>
                  A.A. Fashion/Apparel Design - Kingsborough Community College
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/joe-stinson.png" alt="Joseph Stinson" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Joseph Stinson</h5>
                <h5>Human Resources Director</h5>
                <h5>Virginia, USA</h5>
                <p>
                  &nbsp;
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/alixandria-zysk.png" alt="Alixandria Zysk" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Alixandria Zysk</h5>
                <h5>Illinois, USA</h5>
                <p>
                  B.A. Interior Design - Michigan State University
                  <br>
                  LEED Green Associate - USGBC
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src='images/about/felix-agosto.png' alt='Felix Agosto' width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Felix Agosto</h5>
                <h5>Pennsylvania, USA</h5>
                <p>
                  Master's Business Management - Southwestern College<br>
		              Bachelor's Workforce Education and Curriculum Development - Southern Illinois University<br>
		              Bachelors Criminal Justice- Southwestern College
                  <br><br>
                  U.S. Military Veteran<br>
                  Meritorious Service Medal<br>
                  Commendation Medal<br>
                  Stripes for Exceptional Performers<br>
                  Distinguished Graduate
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/andrew-davidov.png" alt="Andrew Davidov" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Andrew Davidov</h5>
                <h5>Graphic Design and Social Media Internship</h5>
                <h5>New York, USA</h5>
                <p>
                  B.A. Digital Multimedia Design Candidate (2023) - Touro College
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src="images/about/gianna-fazio.png" alt="Gianna Fazio" width='170px'>
              </div>  
              <div class='col-md-9'>
                <h5>Gianna Fazio</h5>
                <h5>Graphic Design and Social Media Internship</h5>
                <h5>Pennsylvania, USA</h5>
                <p>
                  B.F.A. Illustration Candidate 2022 - Marywood University<br>
                  A.F.A Graphic Design - Marywood University<br>
                  A.F.A. Animation - Marywood University
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
        <div class='row'>
        <div class='col-md-3'>
            <img src="images/about/vince-sharp.png" alt="Vince Sharp" width='170' height='170'>
          </div>  
          <div class='col-md-9'>
            <h5>Vince Sharp</h5>
            <h5>Creative Director</h5>
            <h5>Kentucky, USA</h5>
          </div>
        </div>
      </div>

      <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
                <img src='images/about/kyle-mcallister.png' alt="Kyle McAllister" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Kyle McAllister</h5>
                <h5>Michigan, USA</h5>
                <p>
                  B.A. Eastern Michigan University
                </p>
              </div>
            </div>
          </div>

          <div class='team-container support-team-member'>
            <div class='row'> 
              <div class='col-md-3'>
              <img src='images/about/Anderson Henry.png' alt="Henry Anderson" width='170' height='170'>
              </div>  
              <div class='col-md-9'>
                <h5>Henry Anderson</h5>
                <h5>California, USA</h5>
                <p>
                B.S. Computer Science - Monterey Peninsula College
                <br><br>
                Social Media and Digital Program Internship
                </p>
              </div>
            </div>
          </div>



        </div>  
      </div>

    </main>

    <?php 
      // insert common code for the footer of the web pages

  
    ?> 

    <!-- This loads Bootstrap scripts from an online repository.
         This is just a copy and paste from Bootsrap's website.
         I don't really know what it all does :)
    -->
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js' integrity='sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4' crossorigin='anonymous'></script>
    
  </body>
</html>
