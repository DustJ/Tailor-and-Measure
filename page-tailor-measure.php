<style type="text/css">
	/* iCheck plugin Line skin, yellow
----------------------------------- */
.icheckbox_line-vs-yellow,
.iradio_line-vs-yellow {
    position: relative;
    display: block;
    margin: 10px;
    padding: 15px 25px 15px 48px;
    font-size: 20px;
    line-height: 24px;
    color: #fff;
    background: #aaaaaa;
    transition: background-color .5s ease;
    border: none;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    cursor: pointer;
}
    .icheckbox_line-vs-yellow .icheck_line-icon,
    .iradio_line-vs-yellow .icheck_line-icon {
        position: absolute;
        top: 50%;
        left: 13px;
        width: 13px;
        height: 11px;
        margin: -5px 0 0 0;
        padding: 0;
        overflow: hidden;
        background: url(/wp-content/themes/xyz/images/line.png) no-repeat;
        border: none;
    }
    .icheckbox_line-vs-yellow:hover,
    .iradio_line-vs-yellow:hover,
    .icheckbox_line-vs-yellow.checked:hover,
    .iradio_line-vs-yellow.checked:hover {
        transition: all .5s ease; background:#497fba; 
    }
    .icheckbox_line-vs-yellow.checked,
    .iradio_line-vs-yellow.checked {
        background: #225eac;
    }
        .icheckbox_line-vs-yellow.checked .icheck_line-icon,
        .iradio_line-vs-yellow.checked .icheck_line-icon {
            background-position: -15px 0;
        }
    .icheckbox_line-vs-yellow.disabled,
    .iradio_line-vs-yellow.disabled {
        background: #dedede;
        cursor: default;
    }
        .icheckbox_line-vs-yellow.disabled .icheck_line-icon,
        .iradio_line-vs-yellow.disabled .icheck_line-icon {
            background-position: -30px 0;
        }
    .icheckbox_line-vs-yellow.checked.disabled,
    .iradio_line-vs-yellow.checked.disabled {
        background: #dedede;
    }
        .icheckbox_line-vs-yellow.checked.disabled .icheck_line-icon,
        .iradio_line-vs-yellow.checked.disabled .icheck_line-icon {
            background-position: -45px 0;
        }

/* HiDPI support */
@media (-o-min-device-pixel-ratio: 5/4), (-webkit-min-device-pixel-ratio: 1.25), (min-resolution: 120dpi) {
    .icheckbox_line-vs-yellow .icheck_line-icon,
    .iradio_line-vs-yellow .icheck_line-icon {
        background-image: url(/wp-content/themes/xyz/images/line@2x.png);
        -webkit-background-size: 60px 13px;
        background-size: 60px 13px;
    }
}

    .cta {
      background: none repeat scroll 0% 0% #FFF;
      border: 1px solid #225eac;
      border-radius: 0px;
      color: #225eac;
      text-decoration: none;
      text-transform: uppercase;
      font-size: 1.5em;
      padding: 10px;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;    
      transition: border .5s ease;
      transition: color .5s ease;
    }
    .cta:hover {
      border: 1px solid #497fba;
      color: #497fba;
    }
    .cta:disabled {
      background: none repeat scroll 0% 0% #FFF;
      border: 1px solid #A5A5A5;
      border-radius: 0px;
      color: #A5A5A5;
      opacity: 0.2;
    }
    .nowdownloading {
      margin: 10px auto;
      padding: 15px 48px; /*5px 15px 5px 38px;*/
      font-size: 20px;
      line-height: 24px;
      color: #fff;
      background: #dedede;
      transition: background-color .5s ease;
      border: none;
      -webkit-border-radius: 3px;
      -moz-border-radius: 3px;
      border-radius: 3px;
    }
    .info {
      color:#ccc;
      padding:0;
      margin: -5px 0 0 0;
      opacity: 0;
    }
    .info:before {
      display:inline-block;
      content:"i";
      left:2px;
      width:16px;
      height:16px;
      margin-top:-6px;
      font-size:14px;
      font-style:italic;
      line-height:17px;
      text-align:center;
      color:#fff;
      background:#aaaaaa;
      /* css3 */
      -webkit-border-radius:16px;
      -moz-border-radius:16px;
      border-radius:16px;
    }
    #cm-explain { 
      padding:10px; 
      position:absolute; 
      background:#fff; 
      border:1px solid #666; 
      font-size:.5em; 
      z-index:999; 
      width:860px; 
      color:#666; 
      box-shadow: 2px 2px 5px #888888; 
      visibility:hidden; 
      opacity:0; 
      transition:visibility 0s linear 0.3s,opacity 0.3s linear;
    }
    #cm-explain h4 { 
      margin-bottom:5px; 
      color:#990000;
    }
    #cm-explain ul { 
      margin-left:15px;
    }
    #cm-explain li { 
      margin-bottom:10px;
    }
    .info:hover #cm-explain {
      visibility:visible; 
      opacity:1; 
      transition-delay:0s;
    }
</style>

<h1>Deliberate Practice Library &amp; Crucial Moment Measurement</h1>
<div class="content stories">

    <div><!-- Form container -->
      <form id="product-tailoring-form" action="<?php bloginfo('template_directory'); ?>/xyz/processor.php" method="post" onsubmit="jQuery('#isubmit').val('Now Dowloading!'); jQuery('#isubmit').removeClass('cta'); jQuery('#isubmit').addClass('nowdownloading'); jQuery('#isubmit').prop('disabled', true);">
          <div><img src="<?php bloginfo('template_directory'); ?>/images/tm-logo.png" alt="Tailor and Meaasure logo" style="float:left; margin: 0 30px 10px 0;"><p>The Deliberate Practice Library allows you to tailor the practice scenarios to focus on the crucial moments that your unique audience faces on a daily basis. We call these crucial moments because it is how people handle these situations that determine the results they achieve in a variety of important areas.</p>
          <p>This tool will generate tailored practice scenarios according to your industry and the crucial moments that you face.  Once the scenarios are generated, you’ll have the option further customize the scenarios to make them more realistic to your organization.</p>
          <p>In addition to tailored deliberate practice scenarios, you will receive pre- and post- training surveys that measure participant's improvement in handling the crucial moments they practice in the course.</p>
          <p><strong><em>If you are interested in customization of the course beyond the scope of this tool, please contact your VitalSmarts representative to discuss a range of customization offerings.</em></strong></p>
          </div>
          <div style="margin: 60px 0; clear: both;" id="productwrapper">
          <h2 id="hproduct">Step 1: Select a product</h2>
            <div style="width: 50%; float: left;">
              <input type="radio" id="icc1" name="product" value="CrucialConversations" class="styled" /> 
              <label for="icc1">Crucial Conversations</label>
            </div>    
            <div style="width: 50%; float: left;">
              <input type="radio" id="icc3" name="product" value="CrucialAccountability1Day" class="styled" />
              <label for="icc3">Crucial Accountability &ndash; 1 Day</label>
            </div>
          <br style="clear: both;" />
          <div>
            <div style="width: 50%; float: left;">          
              <input type="radio" id="icc2" name="product" value="CrucialAccountability" class="styled" />
              <label for="icc2">Crucial Accountability</label>
            </div>  
              <br style="clear: both;" />
          </div>

          </div>

          <div style="margin: 0 0 60px 0; clear: both;" id="industrywrapper">
          <h2 id="hindustry">Step 2: Select an industry</h2>
            <div style="width: 50%; float: left;">          
              <input type="radio" id="icorp" name="industry" value="Office" class="styled" />
              <label for="icorp">Corporate Office</label>
                         
              <input type="radio" id="iedu" name="industry" value="Education" class="styled" />
              <label for="iedu">Education</label>
            
              <input type="radio" id="ifinance" name="industry" value="FinancialServices" class="styled" />
              <label for="ifinance">Financial Services</label>
            
              <input type="radio" id="igov" name="industry" value="Government" class="styled" />
              <label for="igov">Government</label>
            
            </div>  
            <div style="width: 50%; float: left;">
              <input type="radio" id="ihealth" name="industry" value="Healthcare" class="styled" />
              <label for="ihealth">Healthcare</label>
            
              <input type="radio" id="iit" name="industry" value="ITDevelopment" class="styled" />
              <label for="iit">IT Development</label>
            
              <input type="radio" id="imanuf" name="industry" value="Manufacturing" class="styled" />
              <label for="imanuf">Manufacturing</label>
            
              <input type="radio" id="isafety" name="industry" value="Safety" class="styled" />
              <label for="isafety">Safety</label>            
            </div>
            <br style="clear: both;" />

          </div>

          <div style="margin: 0 0 30px 0; clear: both;" id="crucialmomentswrapper">
          <h2 id="hcrucialmoments">Step 3: Select four crucial moments.
            <span class="info"><div id="cm-explain">
              <p>The deliberate practice scenarios are organized around six key crucial moments with which most industries struggle.</p>
              <div style="float:left; max-width:46%; margin-right:10px;">
              <h4>Broken Commitments</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by commitments broken without warning</li>
                <li>Examples:  team responsible for supporting another does not respond to requests, someone misses deadlines, a manager promises to do something for a subordinate’s career and continually gets “too busy”, etc.</li>
              </ul>
              <h4>Disrespect</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by disrespect</li>
                <li>Examples: yelling, name-calling, threats, sarcasm, etc.</li>
              </ul>
              <h4>Get It Done</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by either time constraints, or pressure to get things done that makes others have to hurry</li>
                <li>Examples:  project deadline, end of day is approaching, pressure to meet quote per day</li>
              </ul>
              </div>
              <div style="float:left; max-width:48%;">
              <h4>Poor Teamwork</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by poor team support or interpersonal relationship.</li>
                <li>Examples: laziness, backbiting, cliques, unresponsiveness, etc.</li>
              </ul>
              <h4>Resistance to Change</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by resistance to change</li>
                <li>Examples: they may violate new policies, continue to use old systems, not be able to switch priorities with project realignments, etc.</li>
              </ul>
              <h4>Unrealistic Expectations</h4>
              <ul>
                <li>Problems in the organization arise from or are made worse by policies or plans without sufficient feasibility assessment</li>
                <li>Examples: those enacting the policies or setting the plan may lack practical experience, not consider realistic timelines, not check to see if it conflicts with another policy, etc.</li>
              </ul>
              </div>
                <p style="clear:both;">*Talk to your VitalSmarts Representative for customization options if the crucial moments your organization is facing are not captured in the crucial moments above.</p>
              </div>          
            </span>
            <span id="cmcounter"></span></h2>
            <div style="width: 50%; float: left;">
                <input type="checkbox" id="ibroke" name="crucial-moments[]" id="crucial-moments_0" value="BrokenCommitments">
                <label for="ibroke">Broken Commitments</label>

                <input type="checkbox" id="idisres" name="crucial-moments[]" id="crucial-moments_1" value="Disrespect">
                <label for="">Disrespect</label>

                <input type="checkbox" id="igetit" name="crucial-moments[]" id="crucial-moments_2" value="GetItDone">
                <label for="igetit">Get it Done</label>
            </div>
            <div style="width: 50%; float: left;">
                <input type="checkbox" id="iteamw" name="crucial-moments[]" id="crucial-moments_3" value="PoorTeamwork">
                <label for="iteamw">Poor Teamwork</label>

                <input type="checkbox" id="ichange" name="crucial-moments[]" id="crucial-moments_4" value="ResistanceToChange"> 
                <label for="ichange">Resistance to Change</label>

                <input type="checkbox" id="iunreal" name="crucial-moments[]" id="crucial-moments_5" value="UnrealisticExpectations">
                <label for="iunreal">Unrealistic Expectations</label>
            </div>  
            <br style="clear: both;" />
          </div>
          <div style="margin: 0 0 30px 0; clear: both;" id="measurementswrapper">
          <h2 id="hmeasurements">Step 4: Crucial moment measurement tools</h2>
             <input type="radio" id="imeasure" name="imeasure" tabindex="8" value="AddedMeasurements" style="vertical-align: middle;" checked>
            <label for="imeasure">We've automatically added measurement tools for each crucial moment you selected.</label>
          </div>
          <div style="margin: 0 0 30px 0; clear: both;" id="agreementwrapper">
          <h2 id="hagreement">Step 5: Accept the terms and conditions</h2>
          <p>By downloading this content you understand and agree to be bound by the following terms and restrictions. The downloaded deliberate practice exercises and measurement tools:</p>
          <ul style="margin: 0 0 20px 20px;">
            <li>Must be used only by participants who have had a VitalSmarts Participant Toolkit purchased for him/her personally.
              May not be copied or reproduced outside their intended use, sold, transferred or otherwise exploited in any manner.</li>
            <li>May not be used to create modified or derivative training products.</li>
            <li>Are the sole intellectual property of VitalSmarts, including all modifications or derivatives, regardless of who created such derivatives and are protected by international and U.S. laws.</li>
            <li>May only be used inside the organization specified by the downloader’s  trainer license agreement.</li>
          </ul>
            <input type="checkbox" id="iagree" name="agree" tabindex="8" value="AgreedToTerms" style="vertical-align: middle;">
            <label for="iagree">I understand and accept.</label>
          </div>

          <div style="text-align: center;">        
            <input class="cta" id="isubmit" type="submit" tabindex="9" value="Download Now" />
          </div>

    
        </form>
    </div><!-- end Form Container -->
</div>


<br class="clearall" />
</div>

</div>
<?php endwhile; endif; ?>
<br class="clearall" />

<script src="<?php bloginfo('template_directory'); ?>/js/icheck.js"></script>
  <script>
  function cmomentCounter() {
      var len = jQuery("#crucialmomentswrapper input[name='crucial-moments[]']:checked").length;
      if(len>0){jQuery("#cmcounter").text(len+' of 4 selected');}else{jQuery("#cmcounter").text(' ');}
    }
	
    jQuery(document).ready(function(){
      jQuery('input').each(function(){
        var self = jQuery(this),
          label = self.next(),
          label_text = label.text();

        label.remove();
        self.iCheck({
          checkboxClass: 'icheckbox_line-vs-yellow',
          radioClass: 'iradio_line-vs-yellow',
          insert: '<div class="icheck_line-icon"></div>' + label_text
        });

        //disable submit button (will enable after agreement is checked)
        jQuery('input[type="submit"]').prop( "disabled", true );
        jQuery('input[type="submit"]').fadeTo( 0, 0.2 );
        //force uncheck (soft refreshes leave checkboxes checked) and disable all steps but the first
        jQuery('#productwrapper, #industrywrapper, #crucialmomentswrapper, #agreementwrapper').iCheck('uncheck');
        jQuery('#industrywrapper, #crucialmomentswrapper, #measurementswrapper, #agreementwrapper').iCheck('disable');
        jQuery('#industrywrapper, #crucialmomentswrapper, #measurementswrapper, #agreementwrapper').css('opacity', '.4');

        //set the first h2 to appear enabled
        jQuery('#hproduct').css('color', "#990000");

        //checking any input enables the next section and changes the color on the section's h2
        jQuery('#productwrapper').on('ifToggled', function(event){
          jQuery('#industrywrapper').iCheck('enable');
          jQuery('#hindustry').css('color', "#990000");
		      jQuery('#industrywrapper').css('opacity', "1");    //animate color fade .fadeTo()
        });
        jQuery('#industrywrapper').on('ifChecked', function(event){
          checkboxes = jQuery('#crucialmomentswrapper').find("input:checkbox");  
          if (checkboxes.filter(":checked").length < 4) {
            jQuery('#crucialmomentswrapper').iCheck('enable');
            jQuery('#hcrucialmoments').css('color', '#990000');
            jQuery('#crucialmomentswrapper').css('opacity', '1');
            jQuery('.info').css('opacity','1')
          }
        });     

        //limit the amount of checkboxes to four
        jQuery('#crucialmomentswrapper').on('ifToggled', function(event){
          cmomentCounter();
          checkboxes = jQuery(this).find("input:checkbox");  
          if (checkboxes.filter(":checked").length >= 4) { 
            checkboxes.not(":checked").iCheck('disable'); 
            jQuery('#measurementswrapper').iCheck('enable');
            jQuery('#hmeasurements').css('color', "#990000");    //animate color fade
            jQuery('#measurementswrapper').css('opacity', "1");

            //enable agreement section at the same time since measurements is not modifiable by user. 
            jQuery('#agreementwrapper').iCheck('enable');
            jQuery('#hagreement').css('color', '#990000');
            jQuery('#agreementwrapper').css('opacity', "1");
          } else { 
            checkboxes.not(":checked").iCheck('enable');
            jQuery('#measurementswrapper').iCheck('disable');
            jQuery('#hmeasurements').css('color', "#666666");    //animate color fade
            jQuery('#measurementswrapper').css('opacity', ".4");

            jQuery('#agreementwrapper').iCheck('uncheck');
            jQuery('#agreementwrapper').iCheck('disable');
            jQuery('#hagreement').css('color', "#666666");    //animate color fade     
          };

          });  
          jQuery('#agreementwrapper').on('ifChecked', function(event){
            jQuery('input[type="submit"]').prop( 'disabled', false );
            jQuery('input[type="submit"]').fadeTo( 500, 1 );
          });           
          jQuery('#agreementwrapper').on('ifUnchecked', function(event){
            jQuery('input[type="submit"]').prop( 'disabled', true );
            jQuery('input[type="submit"]').fadeTo( 0, 0.2 );
          });
      });
    });
  </script>