<?php 
/**
 * Template Name: Cost of Living
 */

 get_header();
?>
<section class="Kb_banner page_header">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="banner_box">
                <h1><?php the_title(); ?></h1>
                <?php the_field('page_description'); ?>
                    <?php if(get_field('page_cta')!=""): ?>
                    <a href="<?php echo get_field('page_cta'); ?>"><?php echo (get_field('page_cta_txt')!='')?get_field('page_cta_txt'):"Book a Consultation";  ?></a>
                    <?php endif; ?> 
			</div>
        </div>
    </div>
</section>
<section class="living_section_one section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <h2><?php echo esc_html('What exactly is “Cost of Living”?'); ?></h2>
                <p><?php echo esc_html('In this blog, we’ll take a look at the cost of living in Australia, including estimates on how much you’ll be spending on common expenses like food, accommodations, transportation, and so on. Along with those are tips on how you can cut down costs and make the most out of your budget.') ?></p>
                <p><?php echo esc_html('The cost of living refers to the amount of money needed to cover basic expenses such as food, housing, transportation, healthcare, and education. This varies depending on the location, lifestyle, and personal choices of the individual.'); ?></p>
                <p><?php echo esc_html('It’s important to understand the cost of living in Australia before you arrive, so you can plan your finances accordingly.'); ?></p>
            </div>
            <div class="section_right width_right">
                    <img src="<?php echo get_template_directory_uri() . "/assets/images/cost-of-living.png" ?>" alt="">
            </div>
        </div>
    </div>
</section>

<section class="cost_bg living_section_tow section-space  col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <h3><?php echo esc_html('Overview of Cost of Living in Australia'); ?></h3>
                <p><?php echo esc_html('As an international student, you’ll need an estimated amount of around AUD$ 20,800 annually to cover the cost of living – that’s at least AUD$ 1600 to cover the average living expenses per month.') ?></p>
                <p><?php echo esc_html('If you’re wondering why it’s so expensive, it’s because of the high standard of living in Australia, which includes top-notch education, healthcare, and other essential services.'); ?></p>
                <p><?php echo esc_html('The table below will give you an idea of how this amount can be allocated across different types of common expenses you’ll likely encounter during your stay in Australia.'); ?></p>
                <p><?php echo esc_html('However, remember that your actual expenses can vary depending on the specific city or region you choose to study in, as well as your lifestyle. The Australian Government has a ') ?><a href="https://costofliving.studyaustralia.gov.au/" target="_blank"> <?php echo esc_html('cost of living calculator') ?> </a> <?php echo esc_html('you can use to estimate your weekly or monthly expenses.') ?></p>
            </div>
            <div class="section_right width_right">
                <figure class="wp-block-table">
                    <table class="cost_table">
                        <thead>
                            <tr>
                                <td><?php echo esc_html('Common expenses')?></td>
                                <td><?php echo esc_html('Estimated monthly cost') ?></td>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc_html('Accommodations') ?></td>
                                <td><?php echo esc_html('AUD$ 800') ?></td>
                            </tr>
                            <tr>
                                <td><?php echo esc_html('Utilities') ?></td>
                                <td><?php echo esc_html('AUD$ 50') ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Transportation') ?></td>
                                <td><?php echo esc_html('AUD$ 70') ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Food/groceries') ?></td>
                                <td><?php echo esc_html('AUD$ 420') ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Entertainment/leisure') ?></td>
                                <td><?php echo esc_html('AUD$ 230') ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Miscellaneous') ?></td>
                                <td><?php echo esc_html('AUD$ 30') ?></td>
                            </tr> 
                        </tbody>
                    </table>
                </figure> 
            </div>
        </div>
    </div>
</section>

<section class="living_section_three section-space  col-style">
    <div class="Kb_container">
        <div class="kb_row"> 
            <div class="section_center">
                <h3><?php echo esc_html('Cost of Living vs Standard of Living'); ?></h3>
                <p><?php echo esc_html('Before we delve further into the matter, you may be wondering what the difference is between cost of living and standard of living.') ?></p>
                <p><?php echo esc_html('On one hand, “standard of living” refers to the overall quality of life in a place. For example, if residents in a particular area enjoy a good living wage and have easy access to high-quality education and healthcare, the place is said to have a high standard of living.'); ?></p>
                <p><?php echo esc_html('On the other hand, “cost of living” is basically the amount of money you’ll need to sustain a particular standard of living in a specific location. So, by logic, a higher standard of living generally means a higher cost of living.'); ?></p>
            </div>
        </div>
    </div>
</section>
<section class="living_section_four section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <h3><?php echo esc_html('Living Expenses in Australia'); ?></h3>
                <p><?php echo esc_html('Accommodation and housing costs are usually the biggest expenses.') ?></p>
                <p><?php echo esc_html('It’s difficult to provide an exact value for the cost of accommodations, as the price usually varies depending on the city or region you’ll stay in and the type of accommodation you choose. A good benchmark for decent accommodations would be around AUD$ 500 per month, while more expensive ones could cost up to AUD$ 1200 per month.'); ?></p>
            </div>
            <div class="section_right width_right"> 
                 <img src="<?php echo get_template_directory_uri() . "/assets/images/Living-Expenses.png" ?>" alt="">
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_five section-space col-style">
    <div class="Kb_container">
        <div class="kb_row justify-content-center">
            <div class="faq title_section text-center">  
                <h2><?php echo esc_html('Overview of Cost of Living in Australia'); ?></h2>
                <p class="cost_p"><?php echo esc_html('Types of Accommodations') ?></p>
                <p><?php echo esc_html('To give you a better idea, take a look at the table provided for the common types of housing and their price ranges.') ?></p>
            
            </div>
        </div>
        <div class="kb_row col_four_bottom justify-content-center">
            <div class="faq">
                <figure class="wp-block-table">
                    <table class="cost_table">
                        <thead>
                            <tr>
                                <td><?php echo esc_html('Types of housing') ?></td>
                                <td><?php echo esc_html('Estimated weekly cost') ?></td>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc_html('Homestays'); ?></td>
                                <td><?php echo esc_html('AUD$ 250 – 350'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Residential colleges'); ?></td>
                                <td><?php echo esc_html('AUD$ 200 – 750'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Private rentals'); ?></td>
                                <td><?php echo esc_html('AUD$ 100 – 500'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Managed student accommodation'); ?></td>
                                <td><?php echo esc_html('AUD$ 200 – 500'); ?></td>
                            </tr>  
                        </tbody>
                    </table>
                </figure> 
                <div class="accordion">
    
                    <div class="accordion-item">
                      <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title"><?php echo esc_html('Homestays') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Homestays are a great option if you want a taste of authentic Australian culture and lifestyle. During a homestay, you’ll have a single room at an Australian local or family’s home, which may come already with meals and utilities.') ?></p>
                        <p><?php echo esc_html('Apart from that, you’ll get to learn more about life in Australia from the Australian family host themselves and immerse yourself in the local community.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Private Rentals') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Private rentals are privately owned houses or apartments for rent. They offer more flexibility in terms of the type of rental you want, such as the style, amenities, and location. Plus, you can save money by sharing the rental with roommates.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('PrivateHostels & GuesthousesRentals') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Hostels and guesthouses is a popular accommodation option among international students and expats. They are similar to dorm-type accommodations with shared facilities (e.g. kitchen, bathroom) and common spaces.') ?></p>
                        <p><?php echo esc_html('What makes it one of the top options is its affordability and flexible stay options. On top of that, you get to meet and build relationships with like-minded people, which makes for a better Australian experience overall.') ?></p>
                      </div>
                    </div>
                    
                    <div class="accordion-item">
                      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Managed Student Accommodations') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Managed Student Accommodations are accommodations suited for students, usually located outside (but still near) the campus. They are similar to private rentals except that the features and facilities being offered are more catered toward students.') ?></p>
                        <p><?php echo esc_html('These accommodations offer fully furnished rooms, usually with basic utilities already included, as well as facilities like gyms and recreational spaces.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Residential Colleges') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Residential colleges are student accommodations located either on campus grounds or nearby.') ?></p>
                        <p><?php echo esc_html('Opting in one means you’ll have a furnished room with access to facilities such as Wi-Fi, shared libraries, communal study areas, bathrooms, kitchens, and sometimes even meals and cleaning services. They also provide recreational spaces, social activities, and sporting events.') ?></p>
                        <p><?php echo esc_html('However, since they are located on campus grounds, they may have more restrictions in terms of curfews and visitors.') ?></p>
                      </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</section>
<section class="living_section_six section-space">
    <div class="Kb_container">
        <div class="kb_row justify-content-center"> 
            <div class="title_section text-center"> 
                <h2><?php echo esc_html('Additional Accommodation Costs'); ?></h2>
                <p><?php echo esc_html( 'Apart from the cost of renting a furnished room, there are other essential housing costs that you need to keep in mind. We have mentioned them earlier, and these are utilities, internet, and security bonds. Utilities include gas, electricity, and water. Among these, electricity is usually the most expensive, costing around AUD$105 per month, while gas and water cost around AUD$60 and AUD$90 per month, respectively.' ) ?></p>
                <p><?php echo esc_html( 'For internet access, the average monthly fee is around AUD$ 70 to AUD$ 90. As previously discussed, most of the housing rental options usually include utilities and internet in their rental conditions. However, in case they are not included, at least you already have a good idea to be aware of how much these services would cost you.' ) ?></p>
                <p><?php echo esc_html( 'Another thing. When you rent a place, you may be required by your landlord to pay a certain security fee or bond, which is a form of financial security for the landlord in case of any damage to the property or unpaid rent at the end of the tenancy. The fee varies, depending on factors such as the length of your lease, market conditions, and so on. Typically, the bond or deposit will be returned to you at the end of the tenancy if there is no damage to the property, and all rent and bills have been paid in full.') ?></p>
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_seven section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/Affordable-Housing.png" ?>" alt="">
            </div>
            <div class="section_right width_right">  
                <h3><?php echo esc_html('Tips for Finding Affordable Housing'); ?></h3>
                <p class="cost_p"><?php echo esc_html('Tips for Finding Affordable Housing in Australia.') ?></p>
                 <ul class="cost_list">
                    <li><?php echo esc_html('Opt for shared accommodation options.') ?></li>
                    <li><?php echo esc_html('Choose accommodations that cover utilities and other bills, and offer facilities like gyms and recreational areas, so you don’t have to allocate a separate budget for them.') ?></li>
                    <li><?php echo esc_html('Rent a place that’s just big enough for your needs. Too big means a higher, unnecessary cost.') ?></li>
                    <li><?php echo esc_html('Consider renting a place further away from campus, as deals can be better there.') ?></li>
                    <li><?php echo esc_html('Read online forums or join an online community where you can seek advice regarding accommodation matters from current and former international students and/or expats in Australia.') ?></li> 
                 </ul>
            </div>
        </div>
    </div>
</section>
<section class="living_section_eight section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
               <h3><?php echo esc_html('Transportation Cost'); ?></h3>
                <p class="cost_p"><?php echo esc_html('Of course, unless you’re staying on campus grounds or just a few steps away from work, you’ll need to find a way to travel.') ?></p>
                 <p><?php echo esc_html('Fortunately, there are several modes of public transport available for you to use, including buses, trains, trams, and ferries. But, note that public transportation costs can be a bit pricey and can cost you around AUD$ 75 – AUD$ 216 per month.') ?></p>
                 <p><?php echo esc_html('Also, transportation costs can vary depending on where in Australia you are residing. If you’re a student, you can take advantage of') ?> <a href="<?php echo esc_url('https://www.studyaustralia.gov.au/english/live/plan-your-arrival/transport') ?>"><?php echo esc_html('transport concessions') ?></a><?php echo esc_html(', which can help you save some money for your other expenses.') ?> </p>
            </div>
            <div class="section_right width_right">  
                 <img src="<?php echo get_template_directory_uri() . "/assets/images/transportation.png" ?>" alt=""> 
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_nine section-space col-style">
    <div class="Kb_container">
        <div class="kb_row justify-content-center">
            <div class="faq title_section text-center">  
                <h2><?php echo esc_html('Public Transport in Australia'); ?></h2>
                <p><?php echo esc_html('There are many public transport options in Australia but the availability and cost can vary in each city. Refer to the table below featuring the different states/territories, the public transport methods available, and the cost of the full fare per month.') ?></p> 
                <p><?php echo esc_html('To learn more about the transportation system and how it operates in each state or territory, visit their respective transportation websites.') ?></p>  
            </div>
        </div>
        <div class="kb_row col_four_bottom justify-content-center">
            <div class="faq">
                <figure class="wp-block-table">
                    <table class="cost_table">
                        <thead>
                            <tr>
                                <td><?php echo esc_html('State/territory') ?></td>
                                <td><?php echo esc_html('Available mode of transport') ?></td>
                                <td><?php echo esc_html('Monthly cost of travel') ?></td>
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc_html('New South Wales (NSW)'); ?></td>
                                <td><?php echo esc_html('Trains, buses, light rail, ferries'); ?></td>
                                <td><?php echo esc_html('AUD$ 216'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Northern Territory (NT)'); ?></td>
                                <td><?php echo esc_html('Buses'); ?></td>
                                <td><?php echo esc_html('AUD$ 86'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Queensland (QLD)'); ?></td>
                                <td><?php echo esc_html('Trains, buses, light rail'); ?></td>
                                <td><?php echo esc_html('AUD$ 151'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('South Australia (SA)'); ?></td>
                                <td><?php echo esc_html('Trains, trams, buses'); ?></td>
                                <td><?php echo esc_html('AUD$ 101'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Tasmania (TAS)'); ?></td>
                                <td><?php echo esc_html('Buses'); ?></td>
                                <td><?php echo esc_html('AUD$ 75'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Victoria (VIC)'); ?></td>
                                <td><?php echo esc_html('Trains, trams, buses'); ?></td>
                                <td><?php echo esc_html('AUD$ 159'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Western Australia (WA)'); ?></td>
                                <td><?php echo esc_html('Trains, buses, ferries'); ?></td>
                                <td><?php echo esc_html('AUD$ 135'); ?></td>
                            </tr>   
                        </tbody>
                    </table>
                </figure> 
                <h3 class="text-center"><?php echo esc_html('Other Ways of Getting Around') ?></h3>
                <div class="accordion">
    
                    <div class="accordion-item">
                      <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title"><?php echo esc_html('Taxi') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Getting a taxi or “cab” is a convenient way to get from one place to another. You can easily book a ride via your smartphone app or just flag one down on the street since they are pretty much readily available at places like malls and train stations.') ?></p>
                        <p><?php echo esc_html('However, taxis tend to be expensive which is why the majority tend to look for more affordable transportation options. Even more, taxis tend to be pricier during late-night hours or when traveling on toll roads.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Ride-Sharing Services') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Ride-sharing services like Uber are a cheaper alternative to taking taxis because basically, you’ll be splitting the fare with people headed to the same destination or whose destination is along your route.') ?></p>
                        <p><?php echo esc_html('And for that reason, it is a much more go-to option for students and expats. Booking the service is easy and can be done through a mobile app run by the ride-sharing service.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Driving') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Driving a car is a great option especially if you’re residing in areas where public transport is limited. However, there are a few things you need to keep in mind before you hit the road.') ?></p>
                        
                        <p><?php echo esc_html('Firstly, you must have a valid driving license from your country or an International Driving Permit. Depending on the state/territory you’re in, you may also need to apply for an Australian driver’s license after a certain amount of time.') ?></p>

                        <p><?php echo esc_html('Also, each state/territory in Australia has its own set of road rules which can vary from one another. So, make sure to go through the road rules of the state/territory you’re in.') ?></p>

                        <p><?php echo esc_html('Of course, driving a car comes with costs, and the rental fee is at the top of them. Prices vary depending on the rental shop and the duration of renting the car. You can browse through the best car rental websites in your state/territory to find the best deals.') ?></p>

                        <p><?php echo esc_html('Or, if you decide to buy a car, think about the purchasing price on top of insurance costs and other fees.') ?></p>

                        <p><?php echo esc_html('Take note that purchasing a car can be a bit tricky, because there are several considerations such as visa validity and proof of financial capacity, among many others. If you go down that route, make sure to purchase from authorized dealers or resellers. Finally, don’t forget about fuel costs. Gas prices can fluctuate, but according to Numbeo, expect to pay around AUD$ 2 per liter. This can add up quickly, so make sure to budget accordingly.') ?></p>

                      </div>
                    </div>
                    
                    <div class="accordion-item">
                      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Bikes') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Riding a bike is a popular way to get around among locals and foreigners. It’s a healthier and much cheaper alternative to public transport.') ?></p>
                        <p><?php echo esc_html('In fact, you can rent a bike starting at around AUD$ 35 a week. Better yet, buying a new one can save you a lot in the long run as a long-term investment. Just remember to follow safety rules, such as wearing helmets and installing front and tail lights on your bike.') ?></p>
                      </div>
                    </div> 
                </div> 
            </div> 
        </div>
    </div>
</section>
<section class="living_section_seven ten section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/transportation-costs.png" ?>" alt="">
            </div>
            <div class="section_right width_right">  
                <h3><?php echo esc_html('Tips for Reducing Your Transportation Costs'); ?></h3>
                <p class="cost_p"><?php echo esc_html('Here are some tips for saving money on transportation expenses:') ?></p>
                 <ul class="cost_list">
                    <li><?php echo esc_html('Use public transportation instead of owning a car.') ?></li>
                    <li><?php echo esc_html('Take advantage of student discounts and concessions.') ?></li>
                    <li><?php echo esc_html('Rent a placWalk or bike towards your destination.') ?></li>
                    <li><?php echo esc_html('Plan your trips ahead of time so you can maximize time and transportation costs.') ?></li> 
                 </ul>
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_eleven section-space col-style">
    <div class="Kb_container">
        <div class="kb_row justify-content-center">
            <div class="faq title_section text-center">  
                <h2><?php echo esc_html('Food and Grocery Cost'); ?></h2>
                <p><?php echo esc_html('Food and groceries can be a big part of your daily expenses. If you’re looking to cook your own food, here’s a list of prices to give you an idea of the cost to expect for common grocery items:') ?></p> 
                <p><?php echo esc_html('Note, however, that those prices are just estimates, and that they greatly vary depending on the brand and where you are purchasing your groceries.') ?></p>  
                <p><?php echo esc_html('If you are fond of dining out, however, know that it’s going to be more expensive than cooking your own food. To give you an idea, here are the costs:') ?></p>  
            </div>
        </div>
        <div class="kb_row col_four_bottom justify-content-center">
            <div class="faq table_tow">
                <figure class="wp-block-table">
                    <table class="cost_table">
                        <thead>
                            <tr>
                                <td><?php echo esc_html('Items') ?></td>
                                <td><?php echo esc_html('Price') ?></td> 
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc_html('New South Wales (NSW)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 216'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Northern Territory (NT)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 86'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Queensland (QLD)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 151'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('South Australia (SA)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 101'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Tasmania (TAS)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 75'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Victoria (VIC)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 159'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Western Australia (WA)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 135'); ?></td>
                            </tr>   
                        </tbody>
                    </table>
                </figure>
                <figure class="wp-block-table">
                    <table class="cost_table">
                        <thead>
                            <tr>
                                <td><?php echo esc_html('Meal options') ?></td>
                                <td><?php echo esc_html('Price') ?></td> 
                            </tr> 
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo esc_html('Basic lunchtime meal'); ?></td> 
                                <td><?php echo esc_html('AUD$ 25'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Fast Food'); ?></td> 
                                <td><?php echo esc_html('AUD$ 14'); ?></td>
                            </tr> 
                            <tr>
                                <td><?php echo esc_html('Mid-range restaurant (3 course meal)'); ?></td> 
                                <td><?php echo esc_html('AUD$ 110'); ?></td>
                            </tr> 
                        </tbody>
                    </table>
                </figure>   
            </div> 
        </div>
    </div>
</section>
<section class="living_section_eight section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
               <h3><?php echo esc_html('Budget Eating Tips'); ?></h3>
                <p class="cost_p"><?php echo esc_html('Below are some tips on how you can cut costs for food and groceries:') ?></p>
                 <ul class="cost_list">
                    <li><?php echo esc_html('Cook your own meals instead of eating out.') ?></li>
                    <li><?php echo esc_html('Better yet, cook your meals with companions, as cooking in bulk usually comes out cheaper.') ?></li>
                    <li><?php echo esc_html('Plan your meals in advance so you can avoid or minimize impulse buying.') ?></li>
                    <li><?php echo esc_html('Buy groceries in bulk.') ?></li> 
                    <li><?php echo esc_html('Minimize eating out at restaurants or cafes.') ?></li> 
                    <li><?php echo esc_html('Take advantage of any student discounts at restaurants.') ?></li> 
                    <li><?php echo esc_html('Shop at cheaper grocery stores. Consider farmer’s markets as they can be more affordable at times.') ?></li> 
                 </ul>
            </div>
            <div class="section_right width_right">  
                 <img src="<?php echo get_template_directory_uri() . "/assets/images/Budget-Tips.png" ?>" alt=""> 
            </div>
        </div>
    </div>
</section>
<section class="living_section_twelve section-space col-style">
    <div class="Kb_container">
        <div class="kb_row justify-content-center"> 
            <div class="title_section text-center">
                <h2><?php echo esc_html('Health Care Cost in Australia'); ?></h2>
                <p><?php echo esc_html('To give you an overview, Australia’s healthcare system, considered to be one of the best in the world, provides all Australians with access to basic medical care and services. It’s composed of the public health system, known as Medicare, which is government-funded, and the private health system, which includes privately-run hospitals and clinics.') ?></p> 
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_thirteenth section-space col-style">
    <div class="Kb_container">
        <div class="kb_row inherit_row">
           <h3><?php echo esc_html('Can international students use Australia’s Medicare?') ?></h3>  
           <p><?php echo esc_html('As an international student, you can utilize Medicare services, but not before applying for the Overseas Student Health Cover (OSHC). Basically, OSHC is a type of health insurance that covers any medical treatment you might need while you’re studying in Australia. Through it, you have coverage for things like:') ?></p>   
           <ul class="cost_list">
            <li><?php echo esc_html('Doctor visits') ?></li>
            <li><?php echo esc_html('Medical treatments and services') ?></li>
            <li><?php echo esc_html('Pharmaceutical services') ?></li>
            <li><?php echo esc_html('Emergency services') ?></li>
            <li><?php echo esc_html('Public and private hospital accommodations') ?></li>
           </ul>  
           <h3><?php echo esc_html('How can I register for OSHC?') ?></h3>
           <p><?php echo esc_html(' Many universities in Australia have preferred OSHC providers, which can make the process easier for international students. So, you can check with your university and see if they offer OSHC options that suit your needs.') ?></p>
           
            <p><?php echo esc_html('However, if you prefer a different provider, you can purchase OSHC on your own. Just make sure to do some research first so you get the best value for money and ensure that the policy covers all your needs.') ?></p>        
            <p><?php echo esc_html('Either way, to get OSHC, approach your university or preferred provider and express your intent to apply for OSHC. Then, you’ll be required to complete an application form which further requires you to provide information like citizenship, birthdate, visa information, length of stay, medical information, and so on.') ?></p>        
            <p><?php echo esc_html('Keep in mind that when choosing a plan, make sure that it is valid for the entirety of your stay in Australia. If you are extending your stay in Australia to continue your studies, you will need to purchase a new OSHC policy to ensure continuous coverage.') ?></p>   
        </div>
        <div class="kb_row justify-content-center">
            <div class="faq">  
                <div class="accordion"> 
                    <div class="accordion-item">
                      <button id="accordion-button-1" aria-expanded="true"><span class="accordion-title"><?php echo esc_html('Health Insurance Cost') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('The cost of OSHC varies depending on the duration of your stay, the level of coverage you choose, and the number of persons included in your policy, if any. So, it’s best to consult your university or your chosen OSHC provider. Some reputable OSHC providers include:') ?></p>
                         <ul  class="cost_list">
                            <li><?php echo esc_html('AHM OSHC') ?></li>
                            <li><?php echo esc_html('Allianz Care Australia') ?></li>
                            <li><?php echo esc_html('Bupa Health Insurance & Care') ?></li>
                            <li><?php echo esc_html('Medibank') ?></li>
                            <li><?php echo esc_html('Nib Health Insurance') ?></li> 
                         </ul>
                         <p><?php echo esc_html('Apart from OSHC, there may be additional healthcare expenses that you need to consider since they are not usually included in an OSHC policy. For example, dental care and specialized medical services such as optical treatments, physiotherapy, and so on. So, if you need coverage for these services, make sure to discuss it as well with your chosen health insurance provider.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-2" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Healthcare for Expats') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('If you’re an expat who meets the criteria for permanent residency in Australia, you can enjoy the benefits that come with Australia’s Medicare. Or, if you come from one of the countries with which Australia has a reciprocal healthcare agreement, you can still qualify for majority of the public healthcare benefits.') ?></p>
                        <p><?php echo esc_html('Unfortunately, if you don’t fall under these categories, you’ll need to obtain private health insurance. This is even a requirement during the visa application process, as you need to show proof of adequate private health insurance.') ?></p>
                        <p><?php echo esc_html('The cost of the insurance will vary depending on benefits and provider you choose. So, make sure to find a plan that covers all your health care needs and offers the best value for your money.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-3" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Education Cost') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Australia offers top-quality education, and if you’re looking to pursue your education here, you probably already know that. In fact, Australia’s higher education system is world-class, attracting a number of over') ?> <a target="_blank" href="<?php echo esc_url('https://theconversation.com/international-students-are-returning-to-australia-but-they-are-mostly-going-to-more-prestigious-universities-193391') ?>"><?php echo esc_html('500,000 ') ?></a> <?php echo esc_html('plus international students in 2020 alone.') ?></p>
                        <p><?php echo esc_html('In terms of education costs, the first thing you need to consider is the tuition fee. The cost of your tuition fee varies greatly depending on the program you are taking and the university you enroll in.') ?></p>
                        <p><?php echo esc_html('To give you a benchmark, a bachelor’s degree would cost you between AUD$ 20,000 and 45,000 a year. On the other hand, a master’s or PhD would cost you around AUD$ 22,000 to 50,000 annually.') ?></p>
                        <p><?php echo esc_html('Note that that’s just a benchmark. It’s better to keep in touch with the universities you are prospecting so you’ll have a better understanding of the tuition fees, as well as any other associated university fees.') ?></p>
                        <p><?php echo esc_html('Aside from tuition fees, you will also need to consider other expenses such as textbooks, equipment, and course materials, all of which can vary based on your program and the requirements of your coursework. To be safe, budget at least AUD$ 500 a year for these.') ?></p>
                      </div>
                    </div>
    
                    <div class="accordion-item">
                      <button id="accordion-button-4" aria-expanded="false"><span class="accordion-title"><?php echo esc_html('Tips for Saving on Education Costs') ?></span><span class="icon" aria-hidden="true"></span></button>
                      <div class="accordion-content">
                        <p><?php echo esc_html('Here are some tips to cut down on education costs:') ?></p> 
                        <ul class="cost_list">
                            <li><?php echo esc_html('Look and apply for scholarships, grants, and other financial aid opportunities offered by your university or external organizations.') ?></li>
                            <li><?php echo esc_html('Consider finding a part-time job to earn money.') ?></li>
                            <li><?php echo esc_html('Consider borrowing books from the library or buying or renting used textbooks.') ?></li> 
                        </ul>
                      </div>
                    </div>
     
                     
                </div> 
            </div>       
        </div>
    </div>
</section>
<section class="living_section_seven section-space col-style">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="section_left width_left">
                <img src="<?php echo get_template_directory_uri() . "/assets/images/Migration-Dream.png" ?>" alt="">
            </div>
            <div class="section_right width_right">  
                <h3><?php echo esc_html('Achieve Your Migration Dream With a KBA Global Consultant'); ?></h3>
                <p><?php echo esc_html('Moving to Australia can be an overwhelming experience. Apart from adjusting to new norms and culture, and managing your finances, you must also navigate through a plethora of paperwork.') ?></p>
                <p><?php echo esc_html('However, you don’t have to do it alone. Our team at KBA Global is here to share the burden with you and make the migration process as smooth as possible.') ?></p>
                <p><?php echo esc_html('We’re here to assist you in achieving your goals of migrating to Australia, whether it be for work, study, or permanent residency. Whether you have questions or worries, we are here to answer them and provide you with advice so you can have peace of mind every step of the way.') ?></p> 
            </div>
        </div>
    </div>
</section>
<section class="cost_bg living_section_fourteen section-space">
    <div class="Kb_container">
        <div class="kb_row">
            <div class="title_section">
                    <h2><?php echo esc_html('We can offer you:') ?></h2>
                    <ul class="cost_list">
                        <li><?php echo esc_html('Expert advice on the best migration program suited to your needs and qualifications') ?></li>
                        <li><?php echo esc_html('Assistance in selecting the right educational institution or employer to help you achieve your career goals') ?></li>
                        <li><?php echo esc_html('Guidance in navigating the complex visa application process, ensuring that you meet all requirements and deadlines') ?></li>
                        <li><?php echo esc_html('Assistance in finding suitable accommodation and affordable health insurance coverage') ?></li>
                        <li><?php echo esc_html('Advice on finding part-time work opportunities to help support your finances Don’t delay any longer in achieving the Australian dream. Give us a call and let’s talk about your future!') ?></li> 
                    </ul>
                     <a class="btn-secondary" href="<?php echo esc_url('') ?>"><?php echo esc_html('Speak with a registered agent now!') ?></a>
            </div>
        </div>
    </div>
</section>
<?php
 get_footer();