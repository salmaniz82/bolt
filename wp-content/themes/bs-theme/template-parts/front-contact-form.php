
<!-- contact form -->
<div class="section fp-noscroll" data-anchor="contact-form">

    <div class="tw-wrapper xl:flex xl:items-center">
        <div class="head mb-6 xl:text-left xl:w-1/3 xl:pr-10"><h2
                class="text-4xl text-bs-blue-light leading-none font-circular mb-6 sm:text-6xl animated delay-p1s">
                Contact Us</h2>
            <div class="tw-no-widow"><p
                    class="font-work-sans-lt sm:max-w-xl sm:mx-auto xl:max-w-xs xl:ml-0 xl:mb-6 animated delay-p2s">
                    For any enquiries you can email us, fill in the form or give the office
                    a&nbsp;call.</p>
            </div>
            <div class="details hidden xl:block"><a href="mailto:user@domain.co.uk"
                                                    class="block text-lg font-work-sans-lt font-bold mb-3 animated delay-p3s">
                    user@domain.co.uk
                </a> <a href="tel:+442033933280"
                        class="block text-lg font-work-sans-lt font-bold animated delay-p4s">
                    +44 (0) 1234567899
                </a></div>
        </div>
        <div class="body xl:w-2/3">
            <div class="tw-contact-form text-sm xl:text-left xl:text-base sm:max-w-lg sm:mx-auto xl:max-w-full animated delay-p5s">

                <?php $nonce = wp_create_nonce('contact_form'); ?>

                <form id="contact-form-body" method="POST" action="<?=admin_url('admin-ajax.php')?>">

                    <input type="hidden" name="action" value="contact_form">
                    <input type="hidden" name="nonce" value="<?=$nonce?>">

                    <div class="my-4 tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">Hi my
                            name is*</label>
                        <div class="field xl:flex-grow"><input placeholder="Your Name Here"
                                                               type="text"
                                                               name="sender_name"
                                                               class="bg-transparent work-sans-lt border px-2 py-1 border-gray-400 outline-none text-center w-full xl:border-none xl:text-left xl:p-0 xl:underline">
                        </div>
                    </div>
                    <div class="my-4 tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">And
                            I'm from*</label>
                        <div class="field xl:flex-grow"><input
                                    name="sender_companyname"
                                    placeholder="Company Name"
                                                               type="text"
                                                               class="bg-transparent work-sans-lt bg-transparent border px-2 py-1 border-gray-400 outline-none text-center w-full xl:border-none xl:text-left xl:p-0 xl:underline">
                        </div>
                    </div>
                    <div class="my-4 hidden xl:block tw-form-field"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">I'd
                            like to talk about</label>
                        <div class="field xl:flex-grow">
                            <div class="contact-reasons w-full flex flex-wrap">
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Full Service
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Strategy
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Management
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Not Sure Yet
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Creative
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Media Buying
                                </div>
                                <div class="reason transition-all-2 cursor-pointer consolas text-sm w-1/5 py-1 mt-3 mr-3 border text-black border-bs-blue-light text-center">
                                    Campaigns
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="my-4 tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">You
                            can email me on*</label>
                        <div class="field xl:flex-grow"><input placeholder="Your Email Here"
                                                               type="email"
                                                               name="sender_email"
                                                               class="bg-transparent work-sans-lt bg-transparent border px-2 py-1 border-gray-400 outline-none text-center w-full xl:border-none xl:text-left xl:p-0 xl:underline">
                        </div>
                    </div>
                    <div class="my-4 tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">Or
                            call me on*</label>
                        <div class="field xl:flex-grow"><input
                                    name="sender_number"
                                    placeholder="Your Number Here"
                                                               type="tel"
                                                               class="bg-transparent work-sans-lt bg-transparent border px-2 py-1 border-gray-400 outline-none text-center w-full xl:border-none xl:text-left xl:p-0 xl:underline">
                        </div>
                    </div>
                    <div class="my-4 tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">I
                            should also mention*</label>
                        <div class="field xl:flex-grow"><textarea rows="1"
                                                                  placeholder="Your Message Here" name="sender_message"
                                                                  class="bg-transparent work-sans-lt bg-transparent border px-2 py-1 border-gray-400 outline-none text-center w-full xl:border-none xl:text-left xl:p-0 xl:underline"></textarea>
                        </div>
                    </div>
                    <div class="hidden my-4 xl:block tw-form-field xl:flex"><label
                            class="hidden work-sans-lt xl:block xl:text-black xl:mr-1">How
                            did you hear about us?</label>
                        <div class="field xl:flex-grow"><select name="found_via"
                                class="work-sans-lt px-2 -mt-1 consolas text-black py-1 bg-gray-200 outline-none text-center">
                                <option value="choose">Choose</option>
                                <option value="event">Event</option>
                                <option value="google">Google</option>
                                <option value="referral">Referral</option>
                                <option value="social_media">Social Media</option>
                                <option value="word_of_mouth">Word of Mouth</option>
                                <option value="other">Other</option>
                            </select></div>
                    </div>
                    <button type="submit"
                            class="btn text-white bg-bs-blue-light hover:border-bs-blue-dark hover:bg-bs-blue-dark hover:text-white lg:border-bs-blue-light lg:bg-transparent lg:text-bs-blue-light">
                        <img src="images/loading_icon.svg" alt="Loading..."
                             class="spin h-8" style="display: none;"> <span
                            class="lg:font-circular lg:text-xl">Send</span></button>
                </form> <!----> <!----></div>
        </div>
    </div>
</div><!-- contact form -->