<?php
/**
 * Displays content for proyecto in front page
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */
// Shortcode to output proyecto
    function proyecto_shortcode( $atts ) {
        function proyecto(){ ?>
            <!-- accordion -->
            <link rel="stylesheet" type="text/css" href="http://www.bosquesdeyarima.com/new/wp-content/themes/MammutInteractivo/js/accordion/style.css" />
            <!-- Accordion-->
            <script type="text/javascript" src="http://www.bosquesdeyarima.com/new/wp-content/themes/MammutInteractivo/js/accordion/jquery.accordion.js"></script>
            <script type="text/javascript" src="http://www.bosquesdeyarima.com/new/wp-content/themes/MammutInteractivo/js/accordion/custom.js"></script>
            <div class="container">                
                <div class="one_half">                    
                    <div id="st-accordion-four" class="st-accordion-four">                    
                    <ul>                    
                        <li class="" style="overflow: hidden; height: 50px;">
                            <a href="#">14 Diffrent Creative Header Styles<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content" style="display: none;">
                                <p>Readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using making it look like readable English. Many desktop publishing packages and web page editors now use many web sites still in versions have over the years.</p>

                            </div>
                        </li>                        
                        <li class="" style="overflow: hidden; height: 50px;">
                            <a href="#">Fully Responsive Well Structured<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content" style="display: none;">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's lorem ipsum passages.</p>
                                <br>
                                <p>Standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting,</p>

                            </div>
                        </li>                        
                        <li class="st-open" style="overflow: hidden; height: 197px;">
                            <a href="#">Free Support Free Lifetime Updates<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content" style="display: block;">
                                <p>All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always.</p>
                            </div>
                        </li>                        
                        <li>
                            <a href="#">Premium Sliders Portfolios and Forms<span class="st-arrow">Open or Close</span></a>
                            <div class="st-content" style="display: none;">
                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything hidden in the middle of text.</p>
                                <br>
                                <p>Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                            </div>
                        </li>                        
                    </ul>                    
                </div>                
                </div><!-- end section -->               
                
                <div class="one_half last">                
                    <div class="pro_bar">                    
                        <h5>Website Design</h5>
                        <div id="progress_bar_gray" class="ui-progress-bar3 ui-container">
                        <div class="ui-progress3" style="width: 90%; overflow: hidden;"><span class="ui-label" style="display: block;"><b class="value">90%</b></span></div>
                        </div><!-- end section -->
                        
                        <br>
                        
                        <h5>Graphic Design</h5>
                        <div id="progress_bar_gray2" class="ui-progress-bar3 ui-container">
                        <div class="ui-progress3" style="width: 72%; overflow: hidden;"><span class="ui-label" style="display: block;"><b class="value">72%</b></span></div>
                        </div><!-- end section -->
                        
                        <br>
                        
                        <h5>Javascript</h5>
                        <div id="progress_bar_gray3" class="ui-progress-bar3 ui-container">
                        <div class="ui-progress3" style="width: 80%; overflow: hidden;"><span class="ui-label" style="display: block;"><b class="value">80%</b></span></div>
                        </div><!-- end section -->
                        
                        <br>
                        
                        <h5>Development</h5>
                        <div id="progress_bar_gray4" class="ui-progress-bar3 ui-container">
                        <div class="ui-progress3" style="width: 94%; overflow: hidden;"><span class="ui-label" style="display: block;"><b class="value">94%</b></span></div>
                        </div><!-- end section -->
                        
                        <br>
                        
                        <h5>Marketing</h5>
                        <div id="progress_bar_gray5" class="ui-progress-bar3 ui-container">
                        <div class="ui-progress3" style="width: 85%; overflow: hidden;"><span class="ui-label" style="display: block;"><b class="value">85%</b></span></div>
                        </div><!-- end section -->
                        
                    </div>
                    
                </div><!-- end section -->
                
            </div> 
        <?php };
        return proyecto();
    }
    add_shortcode( 'proyecto-sc', 'proyecto_shortcode');
?>    

