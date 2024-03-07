<div id="myModal" class="modal fade contact_popup" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="popup_form">
                <button type="button" class="close_popup" data-dismiss="modal" aria-label="Close">
                    X</button>
                <form class="leadform lfcta" method="POST" data-source="popup" data-fid="go76FMp3ljTC2siP2R0leSuTEMil12T6IFd5vdiS" action="{{url('/application-process')}}">
                    {{csrf_field()}} 
                    <h3 class="title">Get In Touch</h3>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form_field">
                                <input type="text" name="name" class="c_field" id="name" placeholder="Your Name"
                                    required>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form_field">
                                <input type="email" class="c_field" name="email" id="email"
                                    placeholder="Your Email Address" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form_field">
                                <input type="text" name="phone" class="c_field" id="phone"
                                    placeholder="Your Phone Number" required>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form_field">
                                <textarea class="c_field" name="message" rows="5" placeholder="Your Message" required></textarea>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label" for="flexCheckDefault">To receive our weekly
                                    Newsletter/SMS and offers check here. You can unsubscribe at any
                                    time.</label>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button type="submit" data-nextFormID="secondFormPopup"
                                class="c_btn btn_green lfbtn">Submit</button>
                        </div>
                        <div class="col-lg-8">
                            <p class="success_msg lfmsg d-none">Your form has been submitted</p>
                        </div>
                    </div>
                </form>
                <form class="second-step-leadform lfcta" method="POST" id="secondFormPopup" style="display: none;" action="{{url('/application-process')}}">
                    {{csrf_field()}} >
                    <h3>Litte More Information</h3>
                    <div class="mb-3">
                        <label>1. What is the Genre of your Book?</label>
                        <select class="form-control" id="genre" name="genre[]">
                            <option value="">Select Genre</option>
                            <option value="Children-Book">Children's Book</option>
                            <option value="General fiction">General fiction</option>
                            <option value="Autobiography">Autobiography</option>
                            <option value="Strategy-Management-and-Business-Books">Strategy, Management
                                &
                                Business
                                Books</option>
                            <option value="Self-help">Self-help</option>
                            <option value="Medicine-IT-and-Computer-Science">Medicine and IT & Computer
                                Science
                            </option>
                            <option value="Mystery-and-Thriller ">Mystery & Thriller </option>
                            <option value="Comic-Fantasy-and-Adventure">Comic, Fantasy & Adventure
                            </option>
                            <option value="Cook Book">Cook Book</option>
                            <option value="History-Poetry-and-Religion">History, Poetry & Religion
                            </option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bolder">2. Is your book complete and ready to
                            publish?</label>
                        <div class="custom-radio">
                            <input type="radio" name="ready_to_publish" id="ready_to_publish1" value="Yes">
                            <label for="ready_to_publish1">Yes</label>
                        </div>
                        <div class="custom-radio">
                            <input type="radio" name="ready_to_publish" id="ready_to_publish2" value="No">
                            <label for="ready_to_publish2">No</label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="Describe the book in three basic sentences:" class="form-label">
                            3.How many pages are you planning for the book?
                        </label>
                        <input type="text" class="form-control" name="no_of_pages" />
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label fw-bolder">4. Are you looking for help to publish
                            it?</label>
                        <div class="custom-radio">
                            <input type="radio" name="help_to_publish" id="help_to_publish1" value="Yes">
                            <label for="help_to_publish1">Yes</label>
                        </div>
                        <div class="custom-radio">
                            <input type="radio" name="help_to_publish" id="help_to_publish2" value="No">
                            <label for="help_to_publish2">No</label>
                        </div>
                    </div>
                    <div class="mb-1">
                        <label for="Describe the book in three basic sentences:" class="form-label">5.
                            Tell
                            Us about
                            your book in a few words</label>
                        <textarea class="form-control" name="describe" placeholder="Tell Us about your book in a few words"></textarea>
                    </div>
                    <div class="btn-wrap">
                        <button class="btn btn-skip open_chat_btn">Skip</button>
                        <button type="submit"
                            class="btn btn-theme tra-white-hover w-100 m-2 c_btn lfbtn open_chat_btn">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-madal-main-wrapper">
    <div class="portfolio-modal" style="display: none;" id="frictionpopup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fiction/Chanuka-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Chanuka</h2>
                    <strong>Mathew Wayne
                    </strong>
                    <p>"Aaaaah….." He woke up with a thud. He saw on both his sides. He was in a small room with
                        bunkers. The
                        paint on the walls was scraped, and the room was dimly lit. There was no one in the room. He was
                        all by
                        himself. He looked at the ceiling and began to examine it. He was in a room and not a camp. He
                        got up from
                        the bed and began to examine the bulbs… they were actually bulbs and not gas lamps.
                    </p>
                    <p>"Phew…" he let out a sigh of relief. They say this happens when a person is suffering from an
                        acute
                        stress
                        disorder. This is common in the contemporary world, and it has been common in the past as well.
                        Psychological shocks are common among people who have witnessed terrible and traumatic
                        situations in their
                        lives. Not only teenagers of any time, but it is common among war veterans, soldiers, and army
                        combat
                        doctors.
                    </p>
                    <p>As the 20th century witnessed the end of World War II, when America bombed Hiroshima and Nagasaki
                        as its
                        signatory move; it was evident that the bombing didn’t only have physical effects on the people
                        of the
                        land,
                        but it also retained its psychological effects.
                    </p>
                    <p>
                        Psychologists in the 1950s reported that teenagers who were relatively young when the bombing
                        occurred
                        showed signs of the effects it had caused. Not only this, the victims and witnesses also showed
                        neurotic
                        symptoms of general fatigue, dissociation, and feeling immobile. Whilst the trauma continued;
                        these people
                        became a victim of autonomic nerve imbalance. On account of the devastations that the atomic
                        bombing
                        caused,
                        they would occasionally feel a sense of chill or burning through their veins; known as
                        palpation.

                    </p>

                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="frictionpopup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fiction/Echos-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Echos</h2>
                    <strong>Author: Andrew J. Kalaven
                    </strong>
                    <p>In the calm of the night, whilst deep in his sleep, Joseph was abruptly awakened out of his
                        slumber. His
                        eyes opened wide and stared into the abyss of darkness ahead, as he gasped for air. He sat upon
                        his bed
                        and
                        looked around to see what was going on. In his head, he kept hearing his mother's voice, like a
                        ghost who
                        would silently haunt his existence; her voice was always there with him. Ever since she had died
                        and moved
                        on, Joseph was under the impression that she was still there, not in reality, but in some sort
                        of
                        supernatural way like one would see in the movies. During the eerie hours of the night, a breeze
                        blew in
                        from the window, and Joseph began to shiver on the spot. Gazing out of the window, the rustling
                        of
                        decaying
                        leaves coupled with the snapping of twigs riddled the air with an almost horror-movie like vibe.
                        He slid
                        out
                        of bed, locked the window shut, and waddled over to the kitchen to get a glass of water. It was
                        still the
                        early days of autumn, so little remnants of the summer still showed up here and there and were
                        sometimes
                        accompanied by a peculiar rise in temperature.</p>
                    <p>Joseph stood in the kitchen, glass in hand, sinking into a trance of thought before snapping out
                        of it
                        and
                        returning back to his bed. He cranked up the AC and pulled the covers over his head. Underneath
                        the
                        sheets,
                        he wept as he began to miss his mother, as she had passed away three years before, after
                        struggling with
                        diabetes for much of her adult life. The condition had riddled her with pain, and doctors'
                        visits started
                        to
                        become more frequent as her end drew near. Joseph always stood by his mother's side to make sure
                        she was
                        as
                        comfortable as possible. He did everything that he thought and believed would be enough to
                        support her,
                        but
                        in his head, he always wondered if he had done enough. Did she get what she was entitled to; did
                        she leave
                        anything out when caring for her? These questions were always swarming around his head, and he
                        wondered if
                        they were true. A direct result of this wondering was that she now always lived in his head, not
                        like some
                        sort of disease, but as a part of who he was. It is for this reason that he always felt as if
                        she was
                        right
                        there with him, even if it was just in spirit.</p>
                    <p>The next day, Joseph decided to dress better than usual for work. He pulled out a powder blue
                        shirt, dark
                        blue dress pants, and a dark blue blazer. He added to this a red tie and silver cufflinks, he
                        felt he
                        looked
                        like a man ready to make a difference. He did not always dress this way and would often barely
                        dress
                        appropriately for the occasion. However, the nature of his work forced him to dress in a way
                        that he
                        wasn't
                        comfortable with, but because his job brought in the money, he had no choice. He walked out of
                        the door,
                        locking it behind him. He walked to the bus stop and waited for his daily commute. Standing next
                        to him
                        was
                        a mother and her baby in his cart. While Joseph was scrolling through his emails, he felt as if
                        someone
                        was
                        looking at him, he looked around, and everyone seemed to be minding their own business. When he
                        looked
                        down,
                        the little baby was staring at him with his eyes and mouth wide open. Glistening against the
                        morning sun,
                        the baby's eyes stared at him lovingly, which made Joseph smile from ear to ear.</p>


                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="frictionpopup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fiction/Reckoning-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Reckoning</h2>
                    <strong>Author: Rosie Daykin
                    </strong>
                    <p>Ear-splitting noise and the terrifying sensation of being thrown out of bed woke Camelia to a
                        world in
                        flames. Her first thought was that it must be an earthquake, but as her eyes flew open and she
                        looked
                        around, she knew something else must have happened. The shaking walls and thick smoke flooding
                        the room
                        through her open door told her there was a fire nearby. She saw the flickering hues of red and
                        orange that
                        danced upon the door and froze in fear.
                    </p>
                    <p>A ragged breath introduced thick smoke into her lungs, and she began to cough. The cough felt as
                        if it
                        nearly tore her lungs apart and finally motivated her to get on her feet. Her mind screamed at
                        her to find
                        an escape route out of the burning home. She looked towards the door, but even from a few feet
                        away, she
                        could feel the heat of the inferno. As she looked out into the rest of her home, she saw nothing
                        but
                        flickering orange and red mixed with rolling waves of black and gray. The wood from the house
                        was being
                        consumed by the flames, and she didn’t have long left to escape. </p>
                    <p>The sound of something crashing outside of her bedroom echoed throughout the house, distracting
                        her for a
                        second and enhancing her fear. It sounded like the world was coming down around her.
                    </p>
                    <p>She remained stunned, frozen with disbelief, when flames rolled rapidly into her room through the
                        open
                        door, engulfing the walls with blazing scarlet. Again, her brain reminded her that she was
                        running out of
                        time. The house was built on wooden pillars, and if the fire weakened them enough, the house
                        would
                        collapse
                        and bring the whole roof down on her.
                    </p>
                    <p>Glancing behind her, she realized that the window was the only escape she had. The previous
                        occupant of
                        the
                        house had painted the bedroom, including the window, and had managed to seal it shut. She’d
                        meant to fix
                        that problem since she’d moved in but hadn’t gotten around to it yet. She’d have to break the
                        glass to get
                        through. It would be simple enough to break the glass, but she had another problem to deal with.
                        The
                        window
                        was almost seven feet off the ground. It wasn’t the biggest drop, but right below the window was
                        a small
                        border of stones that ran along the house’s outer boundary. If she didn’t jump far enough, she
                        would end
                        up
                        landing on them, and that could mean broken bones.
                    </p>

                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="frictionpopup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fiction/The-idea-of-HIM-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The idea of HIM </h2>
                    <strong>Author: Carla Muse
                    </strong>
                    <p>I'm awaken by my phone ringing. It’s an unknown number that flashes across my screen. I hit the
                        silent
                        button, laying my head back on my pillow, and fall asleep.
                    </p>
                    <p>I am sitting on the couch watching tv, while my dad is in the kitchen frying fish from a great
                        weekend at
                        the cabin. He comes into view as the sun is shining through the dining room window before it's
                        time for
                        supper.</p>
                    <p>"Dad, do you need any help with dinner?" I call out to him. He doesn't reply to me. I call out to
                        him
                        once
                        again, and there is no response from him. He doesn't even turn to look at me. He's just standing
                        there
                        staring out from the window. Beams of light shine on him as the sun is setting. I leave the
                        couch and walk
                        towards him.
                    </p>
                    <p>
                        As I approach him and place my hand on his shoulder, I softly say, "Dad?" He vanishes, and there
                        are dust
                        particles where he was standing. They are floating around through the air in the beam of
                        sunlight.
                    </p>
                    <p>
                        I spring awake in a panic. I’m dripping with sweat and start to cry. It is the first time I have
                        dreamt
                        about my dad since he passed away. I am confused as to why he will not look at me in my dream
                        nor answer
                        me.
                        I swear the dream felt so real. It was like he was there staring out of the window.
                    </p>
                    <p>
                        I walk to the bathroom while collecting myself from that bizarre dream. The light at the top of
                        my phone
                        is
                        blinking. I swipe the screen to unlock it. I see that I have a missed call from Jason and an
                        unknown
                        number.
                        There are three text messages from Jason, as well as a few messages from coworkers, and Troy.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="non-frictionpopup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Non-Fiction/Communication---A-Phenomenon-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Communication - A Phenomenon
                    </h2>
                    <strong>Author: Lisa P Whitle
                    </strong>
                    <p>In the previous chapter, we spoke about effective communication. In this chapter, we will go into
                        detail
                        about what that actually entails. Whenever you communicate with anyone, you will realize the
                        other person
                        is
                        continuously missing your point for one reason alone. That reason is unclear communication. This
                        is a
                        phenomenon that’s very prevalent in parent and child communication, especially grown-up
                        children.
                        Effective
                        communication requires clarity. You need to make sure your child completely understands and
                        doesn’t get
                        the
                        wrong meaning. Grown-up children are quite sensitive and can easily be influenced by others.
                        Teenagers are
                        more vulnerable in the category of grown-up children. It’s kind of a time of self-discovery for
                        especially
                        teenagers.

                    </p>
                    <p>Let’s talk about teenagers here first. When they enter middle and high school, later on, they
                        start
                        seeing
                        themselves going through a lot of changes. Their hormones are active, resulting in physical and
                        even
                        emotional changes within them. They’ll face a whole myriad of issues that would include
                        relationships with
                        the opposite sex, crushes, confidence issues, and peer pressure, and other such issues. At these
                        times,
                        teenagers are also quite impressionable. They will face their first romances, heartbreaks, and
                        breakups,
                        and
                        that could lead to a lot of negative behavior and depression. These are times when your teenager
                        will want
                        to look up to you. You should be his first point of contact when it comes to any of these issues
                        instead
                        of
                        getting advice from others. Any such negative experiences can push them towards drugs and other
                        substance
                        abuse. You need to guide them effectively, which means clear communication. When there is clear
                        communication, then the teenager will understand you much better and apply your suggestions and
                        recommendations better. This also goes back to what we discussed in the first chapter. This is
                        the time
                        you
                        can talk about your own days as a teenager and relate to their issues that way. You can adapt
                        the
                        strategies
                        of your time to today if need be, but it needs to be explained properly.
                    </p>
                    <p>When it comes to clear communication, it needs to be done both ways. Clear communication would
                        require
                        you,
                        as a parent, to listen to your child properly. You can perhaps, as a therapist, take notes when
                        your child
                        is speaking to you about his or her issues at school. Let’s say your teenager comes to you and
                        is
                        discussing
                        a recent breakup with you. He or she is extremely heartbroken and upset. He or she feels
                        rejected and
                        depressed. He or she even feels that the world is caving in on them, or it’s the end of the
                        world. You
                        need
                        to let them vent to you completely.

                    </p>
                    <p>
                        Once they have done venting, you should respond to them with the utmost clarity. Be their
                        support and lend
                        them an ear. Embrace them if need be so they know you are there for them and feel their pain. If
                        you have
                        to
                        cry with them, then do that too, so they know you both are on the same page. You need to remind
                        them
                        gently
                        throughout the conversation that it’s not the end of the world, and things will get better. You
                        can help
                        them in two ways. You can try to explain to them clearly if there is a way to mend fences with
                        their
                        former
                        significant other. Or, you can help them provide closure so they can focus on their future
                        relationships
                        properly with a fresh start. Empathy here is very important because you need to be the first
                        person they
                        come to when they have a breakup. You should guide them properly through the healing period. You
                        should be
                        very sensitive as they will have mood swings. This is also a time where you should be giving a
                        lot more of
                        your free time to your teenager. You need to make sure that if there is anything she or he is
                        concerned
                        about, he or she could just turn to you. What I mean to say here is that you need to put
                        yourself in their
                        shoes so that effective and clear communication could take place between you and them.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="non-frictionpopup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Non-Fiction/In-Search-of-the-Absolute-Truth-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>In Search of the Absolute Truth</h2>
                    <strong>Author: Rosie Daykin
                    </strong>
                    <h5>Do your best shoes have an FBI file?</h5>
                    <p>Y’all ever heard of the time some wacko put a bomb in his shoes and tried to blow up a plane?
                        Pretty
                        famous
                        news story, I tell you. Ever since then, the TSA’s turned into one of those creepy guys in your
                        social
                        media
                        DMs asking for feet pics. Now, if you ask me, the TSA’s always been kinda scummy; all those body
                        scanners
                        and body checks; can’t a woman get some privacy in this world? But this? This was preposterous,
                        asking us
                        to
                        strip off our shoes and reveal our bare feet? OUR NAKED BARE FEET? I could not believe the world
                        would
                        ever
                        be okay with that, but here we are now, slaves to our shoe-stripping overlords.</p>
                    <p>Now, being the chatterbox that I am, I had a good job in sales. Funny how just a little
                        convincing and
                        some
                        sweet talk has dollars raining down on you. I was so good at ripping people off of their money
                        that they
                        even gave me an award. Outside of the office, they’d probably put you in jail for that, but it’s
                        not even
                        close to the weirdest thing you can go to jail for, as you’ll find out soon enough. So, I’m
                        traveling to
                        Saint Thomas with my co-workers for the award trip and bless the airport security’s souls for
                        making the
                        process smooth. On the other hand, damn the airline, the pilot strolled off to get a donut, and
                        we landed
                        too late to catch the connecting flight. To top it off, I had to throw down money on a hotel
                        room and wait
                        for the next flight. The room smelled of death and cigarettes like a zombie coming out of the
                        grave to hit
                        that one last puff.
                    </p>
                    <p>
                        Now I’ll tell you; when you’ve had to spend money on a trip that was supposed to be free, broke
                        up with
                        your
                        boyfriend who’s now a million miles away on some god-forsaken planet called Australia, and woken
                        up
                        smelling
                        like you’ve engaged in adultery with a druggie zombie, you won’t be in the best of moods. The
                        worst part
                        was
                        that I cried all night thinking about my now ex-man, closed my eyes for barely a minute, and
                        then it was 5
                        in the morning. To other people, that might not matter, but I really am not a 5 a.m. person.
                    </p>
                    <p>
                        I strutted down to check-in wearing jeans and my pride and joy; red patent leather silver
                        studded Stuart
                        Weitzman sandals. These babies had the chunkiest heel you’d ever see in a sandal. I stepped up
                        to the
                        counter as a buff check-in agent scanned me from top to bottom. Damn, I thought; this girl was
                        towering
                        over
                        me like The Hulk; I wouldn’t want those hands anywhere near me. Now She-Hulk here eyed my
                        Weitzman sandals
                        with what I could only describe as immense lust. I met her eyes with a stare that clearly said,
                        “No bitch,
                        mine!” As if she had read my mind, she ordered me to take them off. No uh. Nope. No way was she
                        ever put
                        her
                        filthy hands on these babies. But I looked back up at her, towering above me, a poster child for
                        some
                        steroid company, and decided against taking my chances.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="non-frictionpopup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Non-Fiction/The-Coffin-World-of-My-Closet-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The Coffin World of My Closet
                    </h2>
                    <strong>Author: Rufus Brown
                    </strong>
                    <p>“Lies and secrets, Tessa, they are like cancer in the soul. They eat away what is good and leave
                        only
                        destruction behind.” <br>
                        ― Cassandra Clare, Clockwork Prince
                    </p>
                    <p>The evening news was wall-to-wall war and conflict. It was 1968, and the Vietnam War Tet
                        Offensive was in
                        full view to American families at dinner as every frame after bloody TV frame of the carnage for
                        history
                        passed with each second. America was on fire with students protesting the war and race riots in
                        every
                        major
                        city. For me, a highly sensitive 12-year-old boy, it was virtually impossible to escape the
                        horrors on and
                        off the screen. It was self-evident, I suppose that no one escaped the horrors happening across
                        America.
                        My
                        mom and dad were concerned that I was “too sensitive” and were always imploring me to stop being
                        so
                        touchy-feely. If it wasn’t my laugh that threw my dad into a tailspin, it was being too
                        perceptive and
                        reactive, which made the tailspin whirl faster. In the coming years, they would try everything
                        to break me
                        of this unmanly, overly perceptive behavior as well.
                    </p>
                    <p>During the chaos, I attended Middle School at Newark Academy, one of the oldest prep schools in
                        America.
                        It
                        was also recognized as one of the best preparatory schools in the country. The school’s Mascot,
                        the
                        “Minute
                        Man,” was adopted during its founding, as many of the boys and teachers were enlisted as “minute
                        men” in
                        Washington’s Revolutionary Army. I was the second person in my family to attend NA, as my father
                        also
                        attended the Academy when he was my age. Now, what are the chances that a father and son would
                        have the
                        same
                        8th grade, math teacher? A zillion to one? Whatever the odds, Mrs. Catherin Lynham taught us
                        both, and she
                        and my dad were good old friends. To add some sparkle to the friendship, my father was a member
                        of the
                        Schools Board of Trustees. I imagined that that had to be the reason I was ‘elected’ as the 8th
                        Grade
                        class
                        president, despite not running for class president. What a weird surprise, I thought. Oddly, no
                        one in the
                        class was upset at the outcome. I supposed Mrs. Lynham’s friendship with my dad was so strong
                        that she
                        must
                        have added several of her own votes to ensure my election and thereby make one happy friend and
                        father.
                        While that was suspicious enough, even more weird was I never passed one of Mrs. Lynham’s math
                        tests.
                        After
                        geometry, when I hit Algebra, I hit the wall. Not to worry, Walter, your class president.

                    </p>
                    <p>
                        I liked being president as I liked all my classmates, and they liked me too. I was a popular kid
                        and,
                        while
                        not a math student, smart in every other respect. My “sensitivity” underscored my ability to
                        perceive
                        finer
                        points in my studies. It also gave me a strong ability to understand others and to empathize
                        with my
                        classmates. I credit my sensitivity to my popularity, and as time would tell, I went on to
                        successfully
                        run
                        and win in two legitimate elections for class president of my freshman and sophomore year.
                    </p>
                    <p>
                        I advanced in school and developed a love of the humanities, philosophy, history, and the arts,
                        and
                        participated in school plays and sang in the school glee club. I also participated in sports and
                        was part
                        of
                        the Cross-Country, Fencing, and Tennis teams. I was a good runner and an exceptionally good
                        tennis player,
                        but my dad was disappointed that I didn’t play football or basketball, you know, more manly
                        sports. That
                        may
                        be the reason he never attended any of my sporting events. Fencing was for sissy’s, I suppose.
                        But above
                        all
                        of my extracurricular activities, there was one thing I loved doing more than anything: playing
                        the piano.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="non-frictionpopup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Non-Fiction/The-Eleventh-Hour-Fight-against-America--thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The Eleventh Hour: Fight against America
                    </h2>
                    <strong>Author: Cassandra Collin
                    </strong>
                    <p>As the world can see, America is being stripped of the power she once possessed and is blinded by
                        multiple
                        tactics of the following: The removal of the World Health Organization, the Iranian Arms
                        policies,
                        Coronavirus Disease (COVID-19), and a suffering economy. The American dictator, Donald J. Trump,
                        has
                        contributed to these injustices the most. He lacks leadership attributes, acts recklessly, and
                        controls
                        America like a Mob boss instead of leading it like a President. Trump has deprived American
                        citizens of
                        their basic rights and has used code words to incite, activate and cause divisiveness among his
                        followers
                        and citizens who are not a part of his ideology of Make America Great Again (MAGA). Other racist
                        antics,
                        remarks, code words, and phrases of incitement used by Trump include “vicious thugs,” and “when
                        the
                        looting
                        starts, the shooting starts” (what do you have to lose? Referring to black people). Trump has
                        divided this
                        country and shows no empathy for Blacks. He plans to implement the Anti-fascist (ANTIFA) Bill
                        (categorizing
                        the far-left peaceful protesters as terrorists), an excuse against those who would exercise
                        their freedom
                        to
                        protest for their rights, which differs from his support for the Boogaloo boys and their
                        extremist
                        ideologies[A1] . Every time Trump publicly mentions or Tweets MAGA, he is sending a subtle
                        message to his
                        followers. America is on the brink of a civil war between Trump supporters, white supremacists,
                        and
                        ANTIFA’s
                        political movement. A war that is on the people of color. His tweets subtly indicate violence,
                        and they
                        indirectly cause damage and hostility amongst Americans. He then justifies these uprisings
                        against the
                        marginalized community by putting the onus on the governors for not doing their jobs efficiently
                        and
                        failing
                        to restore order. It is about time to keep your eyes and ears open and understand Trump’s
                        message loud and
                        clear. Trump is seizing America’s civil liberties, one policy at a time, both nationally and
                        internationally. For example, international trade and security, relations with foreign nations,
                        interactions
                        for organizations and corporations, and system citizens of the United States. Trump has
                        disrupted foreign
                        policies, to name a few – Nuclear Arms Treaty, International Arms Treaty, and the Open Skies
                        Treaty
                        Withdrawal. This disruption has affected the stability, transparency, and has adversely affected
                        the
                        security of allies and of the United States. Trump did all he could to win a second term
                        Presidency, and
                        even though he didn’t win, he still managed to gain a lot of votes.
                    </p>
                    <p>His most recent disruptions were to dismantle the postal system. This would affect the mail-in of
                        absentee
                        voting ballots and reject further funding to the postal system. If the post office is not
                        funded, the
                        absentee ballots cannot be mailed out to their full potential. He stated that he would not lose
                        the 2020
                        presidential elections to Joe Biden (former Vice President of former President Barack H. Obama).
                        Apparently,
                        Trump did all he could to interfere with a fair election, like a partisan. His fear of losing
                        the second
                        term presidency was obvious.
                    </p>
                    <p>During the 2016 election, rumor has it that Vladimir Putin, Russia’s President meddled with the
                        U.S.
                        votes.
                        That’s how Trump was able to win the rigged 2016 elections, and he is labeled as an illegitimate
                        President
                        of the United States of America. Our foreign allies and the world looks at America with sorrow
                        and
                        disbelief. Our Nation is strong and does not have a place for a dictator like Trump.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Biographypopup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Non-Fiction/The-Coffin-World-of-My-Closet-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The Coffin World of My Closet
                    </h2>
                    <strong>Author: Rufus Brown
                    </strong>
                    <p>“Lies and secrets, Tessa, they are like cancer in the soul. They eat away what is good and leave
                        only
                        destruction behind.” <br>
                        ― Cassandra Clare, Clockwork Prince
                    </p>
                    <p>The evening news was wall-to-wall war and conflict. It was 1968, and the Vietnam War Tet
                        Offensive was in
                        full view to American families at dinner as every frame after bloody TV frame of the carnage for
                        history
                        passed with each second. America was on fire with students protesting the war and race riots in
                        every
                        major
                        city. For me, a highly sensitive 12-year-old boy, it was virtually impossible to escape the
                        horrors on and
                        off the screen. It was self-evident, I suppose that no one escaped the horrors happening across
                        America.
                        My
                        mom and dad were concerned that I was “too sensitive” and were always imploring me to stop being
                        so
                        touchy-feely. If it wasn’t my laugh that threw my dad into a tailspin, it was being too
                        perceptive and
                        reactive, which made the tailspin whirl faster. In the coming years, they would try everything
                        to break me
                        of this unmanly, overly perceptive behavior as well.
                    </p>
                    <p>During the chaos, I attended Middle School at Newark Academy, one of the oldest prep schools in
                        America.
                        It
                        was also recognized as one of the best preparatory schools in the country. The school’s Mascot,
                        the
                        “Minute
                        Man,” was adopted during its founding, as many of the boys and teachers were enlisted as “minute
                        men” in
                        Washington’s Revolutionary Army. I was the second person in my family to attend NA, as my father
                        also
                        attended the Academy when he was my age. Now, what are the chances that a father and son would
                        have the
                        same
                        8th grade, math teacher? A zillion to one? Whatever the odds, Mrs. Catherin Lynham taught us
                        both, and she
                        and my dad were good old friends. To add some sparkle to the friendship, my father was a member
                        of the
                        Schools Board of Trustees. I imagined that that had to be the reason I was ‘elected’ as the 8th
                        Grade
                        class
                        president, despite not running for class president. What a weird surprise, I thought. Oddly, no
                        one in the
                        class was upset at the outcome. I supposed Mrs. Lynham’s friendship with my dad was so strong
                        that she
                        must
                        have added several of her own votes to ensure my election and thereby make one happy friend and
                        father.
                        While that was suspicious enough, even more weird was I never passed one of Mrs. Lynham’s math
                        tests.
                        After
                        geometry, when I hit Algebra, I hit the wall. Not to worry, Walter, your class president.

                    </p>
                    <p>
                        I liked being president as I liked all my classmates, and they liked me too. I was a popular kid
                        and,
                        while
                        not a math student, smart in every other respect. My “sensitivity” underscored my ability to
                        perceive
                        finer
                        points in my studies. It also gave me a strong ability to understand others and to empathize
                        with my
                        classmates. I credit my sensitivity to my popularity, and as time would tell, I went on to
                        successfully
                        run
                        and win in two legitimate elections for class president of my freshman and sophomore year.
                    </p>
                    <p>
                        I advanced in school and developed a love of the humanities, philosophy, history, and the arts,
                        and
                        participated in school plays and sang in the school glee club. I also participated in sports and
                        was part
                        of
                        the Cross-Country, Fencing, and Tennis teams. I was a good runner and an exceptionally good
                        tennis player,
                        but my dad was disappointed that I didn’t play football or basketball, you know, more manly
                        sports. That
                        may
                        be the reason he never attended any of my sporting events. Fencing was for sissy’s, I suppose.
                        But above
                        all
                        of my extracurricular activities, there was one thing I loved doing more than anything: playing
                        the piano.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Biographypopup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Biography/Captive-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Captive
                    </h2>
                    <strong>Author: Roseanne Cosme

                    </strong>
                    <p>I finally arrived at Miami Airport, and it was just how I had imagined. Feeling a combination of
                        joy and
                        excitement, I was ready to take my initial steps towards a brighter future. Whether did I know
                        that a
                        storm
                        had nearly just begun?

                    </p>
                    <p>Life had started out quite good for me. I remember being a good student, with a good family of my
                        mother,
                        my father, and two brothers. Up until I was sixteen, life was good and mundane. I was athletic
                        and took
                        part
                        in sports activities in high school. It's strange how once an incident can flip everything
                        around in just
                        a
                        matter of time. Life can be good at one moment and not so much at the next. To my
                        disappointment, I
                        experienced this at quite a young age.

                    </p>
                    <p>One day "we need to add where you and your friend were standing, like did you just get done with
                        something
                        or were you waiting for someone? Basically, how should we start the story? The story continues
                        from the
                        information we have available.
                    </p>
                    <p>
                        The guys promised my girlfriend and me to take us home. It was a gloomy winter night. We had no
                        such
                        thoughts of suspicion at the time, mostly because there was no evidence to the contrary. These
                        guys were
                        part of the crowd who we used to hang out with at the time at the local coffee shop after
                        school. That is
                        why there was never any suspicion that the situation could go wrong; my girlfriend and I had
                        seen them
                        around often. After a while, the driver pulled over at a forest in the city. His friend told my
                        girlfriend
                        that he would like to talk to her, and they got out of the car. The driver got out and sat next
                        to me in
                        the
                        car. (He was very friendly, and he was not a bad-looking guy either but definitely had some
                        brain damage.
                        He
                        spoke a little weird, I thought, and I think the other guy was the one in control, and the whole
                        thing was
                        his idea. He was fat and looked genuinely evil. When I saw that they were not going in the
                        direction of
                        our
                        home, I was just hoping that we would survive to get out of the situation with little to no
                        damage. But I
                        started to get scared when the only thing I saw was the forest and fog surrounding us. I had the
                        feeling
                        that this wasn't good at all. When he locked the door, I was scared and just wanted to get it
                        over with.
                        They opened the glovebox on the way and had a gun on them; these guys were both very big. So, I
                        thought
                        that
                        the best way to ensure the least possible damage was to say nothing. I noticed that he locked
                        the doors
                        and
                        started to pull his pants down. He pushed my head on himself and forced me until he had an
                        orgasm. He
                        opened
                        the locks after, while I was in a complete and utter shock. I got out of the car and told my
                        friend that
                        we
                        needed to leave.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Biographypopup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Biography/Mirage-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Mirage
                    </h2>
                    <strong>Author: Karla Ballard

                    </strong>
                    <p>I still remember it as clearly, as if it were yesterday. Maybe because of the scar it left
                        behind. Back
                        when my mother was washing clothes under the pomegranate tree, I was playing alone nearby my
                        mother as
                        usual. I had just taken a bath and wore a soft, off-white dress with a square embroidered
                        collar. I felt
                        so
                        pretty. However, I was hungry, and the avocado trees in the backyard had only green avocados. I
                        kept
                        looking
                        at the fruit trees to see if something was ripe to eat. The fruit was rare in the house and
                        luxury to eat
                        because grandma Elsa sold the fruit as soon as it ripened. However, it seemed to be my lucky
                        day, as I
                        discovered a pomegranate hiding at the top of the tree, up high. Excited, I told my mother to
                        cut it for
                        me.
                        She refused, saying, “The other children will see you and will want some too.” I added, “But if
                        you cut it
                        for me, I will not let anybody see it. I will go to the end of the yard and hide until I finish
                        it.
                        Besides,
                        there are no children around.” I convinced her. She brought a tall stick to pick the
                        pomegranate. As she
                        tapped on it, it fell down.

                    </p>
                    <p> At that very moment, all the cousins were coming in, running, from the street. They had been
                        playing,
                        and
                        they saw the fruit falling down. My mother picked the fruit and began to open it. She then gave
                        everyone a
                        piece and gave me a little “leftover” piece. My blood boiled as she gave away the pieces to the
                        other
                        kids,
                        and by the time she gave me the last bit, I had thrown it down on the ground and said firmly, “I
                        don’t
                        want
                        it. I wanted it all. I saw it first! It was mine!”

                    </p>
                    <p>During the chaos, I attended Middle School at Newark Academy, one of the oldest prep schools in
                        America.
                        It
                        was also recognized as one of the best preparatory schools in the country. The school’s Mascot,
                        the
                        “Minute
                        Man,” was adopted during its founding, as many of the boys and teachers were enlisted as “minute
                        men” in
                        Washington’s Revolutionary Army. I was the second person in my family to attend NA, as my father
                        also
                        attended the Academy when he was my age. Now, what are the chances that a father and son would
                        have the
                        same
                        8th grade, math teacher? A zillion to one? Whatever the odds, Mrs. Catherin Lynham taught us
                        both, and she
                        and my dad were good old friends. To add some sparkle to the friendship, my father was a member
                        of the
                        Schools Board of Trustees. I imagined that that had to be the reason I was ‘elected’ as the 8th
                        Grade
                        class
                        president, despite not running for class president. What a weird surprise, I thought. Oddly, no
                        one in the
                        class was upset at the outcome. I supposed Mrs. Lynham’s friendship with my dad was so strong
                        that she
                        must
                        have added several of her own votes to ensure my election and thereby make one happy friend and
                        father.
                        While that was suspicious enough, even more weird was I never passed one of Mrs. Lynham’s math
                        tests.
                        After
                        geometry, when I hit Algebra, I hit the wall. Not to worry, Walter, your class president.

                    </p>
                    <p>
                        I liked being president as I liked all my classmates, and they liked me too. I was a popular kid
                        and,
                        while
                        not a math student, smart in every other respect. My “sensitivity” underscored my ability to
                        perceive
                        finer
                        points in my studies. It also gave me a strong ability to understand others and to empathize
                        with my
                        classmates. I credit my sensitivity to my popularity, and as time would tell, I went on to
                        successfully
                        run
                        and win in two legitimate elections for class president of my freshman and sophomore year.
                    </p>
                    <p>
                        I advanced in school and developed a love of the humanities, philosophy, history, and the arts,
                        and
                        participated in school plays and sang in the school glee club. I also participated in sports and
                        was part
                        of
                        the Cross-Country, Fencing, and Tennis teams. I was a good runner and an exceptionally good
                        tennis player,
                        but my dad was disappointed that I didn’t play football or basketball, you know, more manly
                        sports. That
                        may
                        be the reason he never attended any of my sporting events. Fencing was for sissy’s, I suppose.
                        But above
                        all
                        of my extracurricular activities, there was one thing I loved doing more than anything: playing
                        the piano.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Biographypopup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Biography/Numbness-and-Tingling-thumbnaill.jpg"
                    alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Numbness and Tingling
                    </h2>
                    <h5>Getting too old to stand on one's own two feet
                    </h5>
                    <strong>Author: Rebecca Boronski

                    </strong>
                    <p>Today starts like every other Monday morning. At 6:25 AM, Dr. Naomi Leostein grabs her lunch bag
                        from the
                        fridge and then places it next to the laptop in her handbag. She then blindly reaches for her
                        plaid winter
                        coat before rushing out of the front door. However, this morning provided a little surprise.
                        Four-year-old
                        Nate jumps out from behind the coat rack and shouts, "You found me, Safta." Safta is the Hebrew
                        name for
                        grandma. She was not expecting him to be there at all. She thought that he was still sleeping.
                        Naomi likes
                        it when Nate and his two-year-old sister, Leah, call her Safta. The name "Safta" paints a
                        picture of a
                        youthful grandmother who is loaded with enough energy to keep up with the pace of active
                        grandkids. She is
                        young at heart, mind, body, and soul.</p>
                    <p>"You scared me. I didn't know that you were hiding there!" Naomi says to her grandson. Little
                        Nate then
                        shrieks with glee. Dr. Naomi says to him, "I will play with you and your sister Leah later. I
                        need to
                        leave
                        for work right now." Naomi asks him, "Do you know if Saba left for work yet?" Saba is the Hebrew
                        name for
                        grandpa. When Naomi asks him about Saba, she is referring to her husband, Ethan. Ethan and Naomi
                        have been
                        married for over 30 years. Little Nate and Leah are the children of their eldest child Shayna.
                        Shayna has
                        been married to a young man named Michael for almost six years now, and they have been living in
                        apartments
                        for most of that time. However, Shayna and Michael have recently purchased their first house. It
                        is
                        located
                        in Fresh Meadows, New York, and this is quite exciting for Naomi and Ethan. Fresh Meadows is
                        located near
                        to
                        them. The name "Fresh Meadows" is a bit deceiving. At the time the colonists settled in Fresh
                        Meadows
                        centuries earlier, it was suffused with meadows fed by freshwater springs. However, by the
                        1960s,
                        apartment
                        complexes and post-war tract housing would eventually dominate the landscape. The physical
                        presence of
                        fresh
                        meadows is a bit of a rarity now. Shayna and Michael have just bought a cozy, 1200 square foot,
                        three-bedroom house in the Fresh Meadows neighborhood. Despite its small size, it is certainly
                        spacious
                        enough for Shayna, Michael, and their two kids. It has the added advantage of being less than
                        1.5 miles
                        from
                        Naomi and Ethan's home, which is located in Jamaica Estates, Queens.
                    </p>
                    <p>In addition to their daughter Shayna, Dr. Naomi and Dr. Ethan have two other children who are
                        also now
                        grown adults: Rachel and Adam. Their second daughter, Rachel, is currently engaged to a young
                        man named
                        Dov
                        Heisner. They are planning to get married in the spring at the Crest Hollow Country Club located
                        in
                        Woodbury, New York. This is also where Naomi and Ethan's wedding took place, thirty-plus years
                        earlier.
                        Their son Adam currently lives in Washington, DC. He has a steady girlfriend named Laurie
                        Spreck. Naomi
                        and
                        Ethan greatly miss the everyday hustle and bustle of having their children around them. However,
                        they are
                        happy that Shayna, Michael, and their grandkids are temporarily staying with them while
                        renovations are
                        being completed on Shayna and Michael's new home. After several weeks of construction, the
                        workmen are
                        almost done with the renovation. As soon as the asbestos dust, caused by the removal of the old
                        kitchen
                        floor, is cleared away, they will be ready to move into the new house. Naomi is not eager to see
                        her
                        grandkids, little Nate and Sarah, leave her home. She so much enjoys having them around.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Healthpopup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Health/Understanding-Mental-Toughness-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Understanding Mental Toughness
                    </h2>
                    <h6>“The strength of your mind determines the quality of your life.”
                    </h6>
                    <strong>Author: Edmond Mbiaka
                    </strong>
                    <p>To talk about mental toughness, we need to understand what that means. In the book “Developing
                        Mental
                        Toughness” by Peter Clough and Doug Strycharczyk, it is defined as “the personality trait which
                        determines
                        in large part how people deal effectively with the challenges, stressors, and pressures…
                        irrespective of
                        circumstances.” A lot of times, how effective we are at tackling life’s problems is determined
                        by our
                        mental
                        toughness, or in other words, the strength of mind.

                    </p>
                    <p>The same book states that “according to the 4 Cs model, the overall mental toughness is a product
                        of four
                        pillars:
                    </p>
                    <ol>
                        <li>Challenge: seeing the challenge as an opportunity.</li>
                        <li>Confidence: having high levels of self-belief.</li>
                        <li>Commitment: being able to stick to tasks.</li>
                        <li>Control: believing that you control your destiny.”
                        </li>
                    </ol>
                    <p>If you’re mentally strong, then you can take on any problem that comes your way or deal with
                        tragedies
                        that
                        would happen to you or your loved ones. When you look at a challenge, you turn those moments
                        into
                        opportunities. When it comes to confidence, you need to know that in your heart and mind, you
                        can take on
                        whatever comes your way. You are very sure of yourself. Commitment means you don’t back down
                        from what you
                        set to do, you stick to your guns, and you will complete the tasks you set out to do. Control
                        means that
                        your destiny is in your hand. You are in charge of your life, and you are secure of yourself.
                        These four
                        traits are very important to have. You need to have these four traits inside you to be mentally
                        tough.
                        It’s
                        extremely important to understand the opening quote of this chapter. The strength of the mind
                        does
                        determine
                        the quality of life. If you’re not mentally strong, you can’t make decisions period. It’s not
                        about making
                        just 31decisions; it’s about making the strong and right decisions.
                    </p>
                    <p>
                        Your quality of life does get affected as you can slowly slip into depression and
                        self-destruction. You
                        are
                        easily overcome by peer pressure, drugs, alcohol, and substance abuse. If you don’t want to go
                        down that
                        path, you need to develop mental toughness.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Healthpopup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Health/Self-awareness-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Self-awareness

                    </h2>
                    <strong>Author: Kate Barkley
                    </strong>
                    <p>“When I discover who I am, I’ll be free.” – Ralph Ellison
                    </p>
                    <p>I finally arrived at Miami Airport, and it was just how I had imagined. Feeling a combination of
                        joy and
                        excitement, I was ready to take my initial steps towards a brighter future. Whether did I know
                        that a
                        storm
                        had nearly just begun?

                    </p>
                    <p>We all want to have confidence and surety with the things that we do in our day-to-day lives.
                        When one
                        talks about being self-aware, what does it mean? To be self-aware or to strive to attain
                        self-awareness is
                        to be able to understand and acknowledge the different things that go on in our heads.
                    </p>
                    <p>Self-awareness can be as simple as seeing how you feel when you are around friends. While you are
                        supposedly there to unwind and relax, there can be a million things on your mind that have you
                        both
                        consciously and subconsciously troubled. The setting is that of a BBQ with your closest buddies,
                        and you
                        huddled around the grill. The smell of beef cooking and the sound of a beer bottle opening can
                        be
                        everywhere. There is a wholesome and positive vibe going around. While you are laughing and
                        evidently
                        having
                        a good time inside your head, it is a completely different story. There are insecurities that
                        you are
                        battling, worries that are wearing you down, problems that seemingly have no solution in sight.
                        These
                        things
                        take a toll on you inside. Knowing that, acknowledging that, and understanding that is
                        self-awareness.

                    </p>
                    <p>
                        However, it is sometimes more complex than this as well. There are times when self-awareness is
                        far more
                        complex than all of this. Have you ever had a lot to do, i.e., work, school, assignments,
                        obligations,
                        which
                        you know are important, but for some reason, you just cannot gather the energy to get up and get
                        the work
                        done? You lay in bed, staring into the abyss with the burden of your thoughts weighing down on
                        you. It
                        could
                        be finals week in college with all of these deadlines coming at you, yet nothing is seemingly
                        affecting
                        you,
                        or it is affecting you so much that you've raised a white flag and admitted defeat. This leads
                        you to feel
                        as if you are stuck and have nowhere to go. The impending thoughts of having to get all of this
                        stuff done
                        make you feel even worse than you already do. Realizing and knowing that this is something that
                        is
                        affecting
                        you is self-awareness.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Healthpopup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Health/Thinking-Beyond-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Thinking Beyond
                    </h2>
                    <strong>Author: Will A. Lee

                    </strong>
                    <p>
                        When I turned 22 years old, I felt like my life needed a restart. We live in an era where movie
                        franchises
                        are constantly rebooted, so why can't we restart our lives. Movie studios look at those
                        franchises and see
                        where they went wrong, and by starting fresh, they can make a good movie that can spin off into
                        sequels
                        and
                        beyond. Why can't we do the same with our own lives? We can also do a self-analysis and see what
                        is wrong
                        or
                        right in our life and then see how we can improve things. Sometimes, we all even require a fresh
                        start. We
                        can take the good and improve on it while starting out fresh. So, on my 22nd birthday, I made a
                        clear and
                        concise decision to restart my life. What was important for me to analyze was the negativity in
                        my life
                        that
                        was bringing me down. The negativity consisted of my ego, materialism (greed), jealousy, fear,
                        worry,
                        care,
                        insecurity, and all other negative emotions that I had been feeling. Once I removed all these
                        emotions
                        from
                        my life and personality, I felt like a rebooted movie franchise too. I felt like a new man. It
                        felt like I
                        was born again. Most people use the "born again" phrase for a religious reawakening or a
                        spiritual
                        reawakening, but I am using this phrase for a more personal reawakening that perhaps encompasses
                        all that
                        and more. These things are important because what we realize is that we are the ones who bring
                        ourselves
                        down. Having a fresh start in life is great, but we need to analyze what is not needed in this
                        fresh
                        start.
                        You have to feel like a baby. You have to learn to discover new things as you've never done them
                        before.
                        You
                        look at similar experiences in a new way. Your mindset and outlook in life have to be different
                        and a
                        whole
                        lot more positive. It is important to think positively. It is important to know that now you
                        will make a
                        difference in your life and, in turn, others around you. To be honest, our insecurities are our
                        greatest
                        enemy, and almost all times, they create differences between ourselves and our loved ones, or
                        rather those
                        that matter to us. Once we get rid of those and other negative emotions, we feel renewed and
                        refreshed.
                        Our
                        insecurities and fears will get us down and block us from moving ahead, and it's important we
                        realize that
                        we are bigger and better than that. We can't let them slow us down in the pursuit of our own
                        immaterial
                        happiness.
                    </p>
                    <p> At that very moment, all the cousins were coming in, running, from the street. They had been
                        playing,
                        and
                        they saw the fruit falling down. My mother picked the fruit and began to open it. She then gave
                        everyone a
                        piece and gave me a little “leftover” piece. My blood boiled as she gave away the pieces to the
                        other
                        kids,
                        and by the time she gave me the last bit, I had thrown it down on the ground and said firmly, “I
                        don’t
                        want
                        it. I wanted it all. I saw it first! It was mine!”

                    </p>
                    <p>I wanted to think beyond my ego, insecurities, and other negative emotions. I felt it was
                        important to
                        rise
                        above all this negativity to become a newer person. I also realized a few things. Most
                        importantly, I was
                        able to see the world and my own self a lot more closely than ever before and perform a much
                        better
                        self-analysis. I was able to humble myself and break free of all the mental and emotional
                        shackles that
                        had
                        chained me forever. These negative emotions I speak of are like colored lenses. When we have,
                        for example,
                        ego, we look at everything in life through those colored lenses. We look at the world and form
                        opinions
                        and
                        interpretations of everything inside it through those lenses. It forms our worldview, and that
                        can,
                        unfortunately, be an unclear worldview. The worst thing we do is that every action and
                        interaction we do
                        in
                        the world is derived from that worldview. We impact not just us but those around us with our
                        actions and
                        interactions. Even worse is the life decisions we make based on this worldview we have developed
                        for
                        ourselves. Those decisions become disasters and have long-standing consequences that impact us
                        all our
                        lives. We have to live with the choices we make, and a bad decision can't be reversed in the
                        same way a
                        good
                        decision can't be. A few long-term consequences are bad relationships and life failures. You
                        feel uneasy,
                        and not at peace at all with yourselves. You feel unhappy, and you increase and attract more
                        negativity.
                        Once it goes downhill, it keeps going downhill, leading to depression. That's not the state
                        anyone of us
                        wants to be in at all. Being in a state of depression is one of the lowest lows we can put
                        ourselves in.
                        We
                        become super negative, and those negative emotions I have mentioned above increase ten-fold.
                        When we reach
                        this state where we've simply almost given up on life, we can do two things.
                    </p>
                    <p>
                        We can lift ourselves up by shedding the emotions and going through a restart, or we can choose
                        to end
                        things, and no one wants to go there. Suicidal tendencies are common in people suffering from
                        such massive
                        depression, which is why a restart is essential before reaching that state of mind. What I am
                        explaining
                        to
                        you is a chain of events that negative emotions can create for us. In summary, these simply
                        shape our
                        worldview as they are akin to colored lenses, and we see our life through those lenses. Our
                        decisions
                        shape
                        up our lives, and these decisions are derived from that worldview. The results can be disastrous
                        for us,
                        our
                        loved ones, and everyone around us. We tend to ignore and overlook the impact of our decisions
                        on our
                        loved
                        ones. To be honest, these are the ones that matter more than anyone else in the world. Having
                        said that,
                        every human being matters, but our loved ones feel more impacted by our negative and positive
                        decisions
                        than
                        others.
                    </p>
                    <p>
                        Most importantly, we can totally lose ourselves in the process. That's when we find ourselves in
                        this
                        never-ending bottomless pit of negativity. It's a vicious cycle that we find ourselves in, and
                        it's not
                        great at all. The worst part is that we can't climb back up, and even when we can, it takes a
                        lot out of
                        us.
                        Clearly, none of us want to be in that position at all. It's the worst of the worst, and to
                        reach that
                        point
                        is only going to lead to self-destruction. </p>
                    <p>So, for example, when we do find ourselves sinking in the bottomless pit I mentioned above, we
                        would tend
                        to ask ourselves what's going wrong in our lives and what bad decisions I have made. Then we
                        also try to
                        find solutions to the problems posed by the impact of the decisions. There's one extremely fatal
                        error
                        we're
                        making, and that is what we need to figure out. The answer is right in front of us, and it's
                        very simple.
                        We
                        still have our colored lenses on! Even while we're doing our self-analysis, we are still doing
                        it based on
                        the worldview that we have acquired from the colored lenses. That's a huge hindrance for us
                        because we
                        keep
                        looking for the answers inside of us. How could we look for those answers with the ego-tinted
                        lenses that
                        have formed our worldview? It's not fair to us either because we will not be able to judge
                        ourselves
                        accurately with those lenses. It's sad but true, but these are like shackles that have bound us,
                        and we
                        need
                        to break free from them, which leads me to my first step.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Healthpopup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Health/Look-for-explanations,-not-excuses-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Look for explanations, not excuses

                    </h2>
                    <strong>Author: Chris Daigle
                    </strong>
                    <p class="text-center">"The only thing standing between you and your goal is the bullshit story
                        you keep
                        telling yourself as to why you can't achieve it." ― Jordan Belfort
                    </p>
                    <p>Life has a way of going in one direction at one time and flipping on its head at another time.
                        Our lives
                        can change in the blink of an eye, and there is often not much we can do to avoid it. There are
                        instances
                        when things are going as smoothly as one can dream of, but then without a moment's notice, the
                        tide comes
                        in
                        and washes everything away. Right in front of our eyes, everything that we worked hard for or
                        waited to
                        get
                        was taken, and we are left wondering how it went so wrong. There are always reasons for this
                        happening,
                        whether it is your own fault or the deviousness of someone else. In both cases, you are the one
                        who has to
                        pick the pieces that are left behind. You are the person who has to make a choice where you can
                        either
                        pick
                        up the pieces and start again or sit there in a mess, crying.</p>
                    <p>Now, I understand that it is never easy to be in a situation like this. You have just lost
                        something that
                        you hold dear to you and must now cope with the loss. Some people tend to succumb to this and
                        begin
                        plunging
                        in a downward spiral. They begin to lash out at the people who might not even be involved in the
                        incident
                        and choose to blame others for their own shortcomings or loss. This is wrong. Laying the blame
                        on others
                        does not do much; it only pollutes a relationship because of unnecessary finger-pointing when
                        the right
                        way
                        to move ahead would be to take a step back. Doing this gives you the ability to assess what has
                        happened,
                        see how far and wide the damage is, and formulate what your next step is. You will be able to
                        get an
                        explanation as to what went wrong and where. This way, you will learn how to do and also how not
                        to do the
                        same thing, which will allow you to build on your past mistakes and failures. </p>
                    <p>On the other hand, throwing a tantrum about it all will not get you too far. Yes, it is
                        difficult. Yes,
                        it
                        is unfair. But it is also a reality, and we must accept it. The sooner we are able to look past
                        this, the
                        sooner we will be able to climb out of these tough times. In order to change the way that you
                        think,
                        according to my research, I have come up with a few tips and tricks to help with this.</p>
                    </p>
                    <ul>
                        <li>● Consider the importance of adopting the change: The toughest pill to swallow is that of
                            change.
                            Abandoning a habit or way of life that holds you back is never an easy task, but it is the
                            first step in
                            changing your fate. One way of convincing yourself is by explaining the importance of it by
                            personally
                            doing a cost-benefit analysis. You will see how much your bad habits are holding you down
                            from being
                            somewhere that is a lot better than you are right now.</li>
                        <li>● Embrace the idea of experimentation: They say that when there is a risk, there is either
                            loss or
                            reward. Therefore, higher risk = higher reward/loss. You will never find out what way the
                            seesaw might
                            tilt, but until and unless you don't try, there will never be an answer.</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Romancepopup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Romance/Seductive-love-Infidels-and-love-birds-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Seductive love: Infidels and love birds


                    </h2>
                    <strong>Author: David C. Chang

                    </strong>
                    <p>laire Winger was a beautiful woman, or so Ian thought. He was smitten by her eyes. They
                        were a deep shade of green and shone like emeralds in the darkness around them. While she was
                        beautiful,
                        Ian
                        wasn’t one to let the wrong idea in his head. The obvious baby bump hinted to him that she was
                        or had been
                        married but decided not to ask any personal questions in her present state of shock. He decided
                        to wait
                        for
                        her to regain her composure before pressing for more information.
                    </p>
                    <p>Ian felt sorry for her. The sudden loss of her house and nobody to go to for support would leave
                        anyone
                        distraught, he thought to himself. But he was there, and he knew that he could help her. His
                        mind wandered
                        to the Mansion; a shelter run by his good friend Paul. It would be the perfect refuge for
                        Claire. Although
                        it was quite a long way upstate, things would work out if he could manage to get Claire all the
                        way there.
                        Paul and Catarina always had a room empty no matter what, so a place to stay was guaranteed.
                    </p>
                    <p>As he considered the prospect, he looked at the watch on his wrist. His shift was almost up,
                        which meant
                        that he could help her out almost immediately. He looked up at Claire and met her green eyes
                        with his.
                    </p>

                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Romancepopup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Romance/The-idea-of-HIM-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The idea of HIM

                    </h2>
                    <strong>Author: Carla Muse

                    </strong>
                    <p>I'm awaken by my phone ringing. It’s an unknown number that flashes across my screen. I
                        hit the silent button, laying my head back on my pillow, and fall asleep.
                    </p>
                    <p>I am sitting on the couch watching tv, while my dad is in the kitchen frying fish from a great
                        weekend at
                        the cabin. He comes into view as the sun is shining through the dining room window before it's
                        time for
                        supper.
                    </p>
                    <p>"Dad, do you need any help with dinner?" I call out to him. He doesn't reply to me. I call out to
                        him
                        once
                        again, and there is no response from him. He doesn't even turn to look at me. He's just standing
                        there
                        staring out from the window. Beams of light shine on him as the sun is setting. I leave the
                        couch and walk
                        towards him.
                    </p>
                    <p>
                        As I approach him and place my hand on his shoulder, I softly say, "Dad?" He vanishes, and there
                        are dust
                        particles where he was standing. They are floating around through the air in the beam of
                        sunlight.
                    </p>
                    <p>
                        I spring awake in a panic. I’m dripping with sweat and start to cry. It is the first time I have
                        dreamt
                        about my dad since he passed away. I am confused as to why he will not look at me in my dream
                        nor answer
                        me.
                        I swear the dream felt so real. It was like he was there staring out of the window.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Romancepopup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Romance/THE-RELIGION-OF-LUST-HIM-thumbnaill.jpg"
                    alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>The Religion of Lust
                    </h2>
                    <h6>An ecstatic tale of pursuing sexual realms with a nanny
                    </h6>
                    <strong>Author: Wesley Williams

                    </strong>
                    <p>How many times did they end up in the lounge like this??? Aidan thought to himself. It
                        wasn’t the fact that people having sex was unearthly to him. He just didn’t expect to see that.
                    </p>
                    <p>*Knock knock*
                    </p>
                    <p>Aidan just came back to reality. Someone was knocking on his bedroom door. “Come in.” He replied.
                        It was
                        his father, Nicholas.
                    </p>
                    <p>“Can we talk?” Said, Nicholas. “Should we?” Replied Aidan.
                    </p>
                    <p>Nicholas sat by Aidan’s side. “Look, I know you didn’t want to see what you saw, but let’s be
                        real, there
                        wasn’t anything bad in that. Was there? I enjoyed it, and Julia enjoyed it. You just happened to
                        be at the
                        wrong place at the wrong time!” </p>
                    <p>“Dad…” Mr. Parker interrupted him. “Look! I was never happy with your mom and neither with all
                        those
                        one-night stands! But Julia… she has been a pleasure to be with!”
                    </p>
                    <p>
                        “And why is that so? If I am may ask!” said Aidan.
                    </p>
                    <p>
                        “She is… she is sexy, she is best in bed, she….” “Dad!” Aidan cut him. “Is that it to woe away
                        all our
                        worries? Good sex?” Aidan became defensive.
                    </p>
                    <p>
                        “Well… you’d know when you experience; if you have anything else to say, I’m just a call away.”
                        With this,
                        Mr. Parker left the room.
                    </p>
                    <p>
                        Aidan had his answers, at least to some extent. One that his father wasn’t going to give a shit
                        about him
                        even at this point in time; second, he had to find someone or something else to let out his
                        anger and his
                        frustration.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Romancepopup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Romance/Unfathomable-Love.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Unfathomable Love
                    </h2>
                    <strong>Author: Tiffany Blair Harrison

                    </strong>
                    <p>I was dancing for money and was also affecting people with my touch. I had not
                        forgotten what the psychic had told me and how my ability to heal people through touch and
                        connection
                        worked. I tried my best to heal and console as many people as I could during that time. I felt a
                        sense of
                        purpose when I did that, and it helped me a lot. I felt happy that I had helped them, and it
                        gave me a
                        good
                        feeling. I was good at what I did and was making good bucks, but the healing aspect was also a
                        significant
                        part of it.
                    </p>
                    <p>It is imperative to mention here that the Wall Street guy from New York reached out to me once
                        again. I
                        had
                        forgotten him and all about that encounter with him, but as soon as he reached me, all the
                        floodgates of
                        memories started overflowing, and every second of the past encounter was playing in front of my
                        eyes. My
                        previous experience with him had been quite incomplete, to say the least, and had left me
                        guilt-ridden. I
                        had no contact with him, but he managed to reach out to me somehow. I was astonished initially,
                        but he was
                        a
                        resourceful person and found me out easily. He offered me a very lucrative deal, ludicrous at
                        the same
                        time
                        too! He offered me a huge amount of money and wanted me to be his travel companion on his trip
                        to Las
                        Vegas.
                        It was a very substantial amount and could have potentially solved a lot of my financial issues.
                        I
                        informed
                        my mentor about the whole offer and this sudden development. I told her that his interest was
                        not only the
                        tantric session; he wanted more than that. He wanted to be physical with me, and his motives
                        were
                        something
                        that would have wronged my profession had I agreed! My mentor’s reply confused me and also shook
                        me. She
                        told me to act like I was romantically interested in him and should coax money out of him. He
                        was filthy
                        rich, and he had the money. I took the advice, but I questioned her morals after this
                        conversation. I
                        doubted her integrity and the face she had been wearing in front of us. Tantra is about honesty,
                        healing,
                        and love. This was quite the opposite of what she had always been preaching. I was baffled by
                        this, and
                        this
                        confusion is what spurred me on, and I took his offer.
                    </p>
                    <p>He flew me to Las Vegas in first class, and I had never stepped foot in first class before. The
                        hotels we
                        stayed at were of the highest quality and provided the best services. I was pretending to like
                        him, but I
                        had to admit that I was physically attracted to him. His power and his wealth attracted me, and
                        the whole
                        BDSM factor attracted me a lot as well. He was 50 years old, and he had a son from some other
                        woman. I was
                        momentarily attracted, but I could never see myself settling down with someone like him. I was
                        perhaps
                        still
                        hung up on Conrad, the vision board guy! I went with him to hotel rooms and explored BDSM to
                        such heights
                        that I understood every aspect of it. He even took me on a helicopter ride to see the Grand
                        Canyon, and he
                        was being very generous. To return his generosity, I fucked him, oh I fucked his brains out. It
                        was a
                        steamy
                        session of hardcore sex with bondage and kinky play. He taught me a lot about BDSM, and I
                        learned it
                        quickly. Before long, I was like an expert, and the pleasure was something I had never
                        experienced before.
                        He was a skilled love maker, and he satisfied me every time!
                    </p>
                    <p>It was around that time when I noticed that I started to develop some feelings for him. This man
                        had
                        treated me like a queen, and I was starting to feel indebted, or perhaps those were genuine
                        feelings of
                        affection; I was a bit confused. I was enchanted by him and could almost picture myself living
                        with him
                        and
                        marrying him. There was surely a connection that was building between us. I was still thinking
                        about
                        Conrad
                        at times and Kundalini yoga at times in a small corner of my mind! I shook my head and decided
                        to live in
                        the moment; I wasn’t with Conrad, I was with him, and I decided to focus my attention and energy
                        on him.
                        Conrad was something from the past, and he was my present. I enjoyed a lot with him, but the
                        trip had to
                        end
                        one day. I went back to LA, but soon after that, he contacted me again and asked me if I was
                        willing to
                        visit Mexico with him! I said yes even before his sentence had finished. He flew me in
                        first-class again
                        and
                        gave me the most lavish lifestyle I had ever imagined. He fixed up bubble baths for me every
                        night and
                        treated me so well. He indulged me in BDSM again, and by this time around, I was trained and
                        raring to go.
                        I
                        enjoyed the days traveling and the nights fucking! It was during these days that he started
                        talking to me
                        about his life and his childhood. He had led a very sad early life, and his childhood was a
                        nightmare. He
                        had been through a lot of traumas, and as he was narrating this to me, he broke down in tears. I
                        had never
                        seen a grown man cry before. I did not know what to do, and I tried to console him. I was
                        flabbergasted
                        when
                        it struck me. It was time for me to excel as a healer and cure him. Destiny had brought him to
                        me, and it
                        was my utmost duty to cure him and heal him. He had told me initially that he had always faced
                        difficulty
                        while expressing himself, but when he was with me, he was expressing himself, and he was letting
                        his
                        emotions show. It was a huge improvement! This was divine intervention. I had a chance to heal
                        him, and I
                        was not going to let this chance go. The more he talked to me and told me about his life, the
                        more
                        compassion I felt for him and more and more affection for him. This was when the confusion
                        ended; Conrad
                        faded in the background and was now murky. As he talked to me, I felt love for him, I felt
                        genuine love
                        for
                        him in my heart, and it warmed me to my core. I wanted to nurture him, I wanted to love him, and
                        I wanted
                        to
                        shower him with my love to make up for the traumas he had faced in his childhood. He had been
                        treating me
                        like a goddess, and I was now ready to return him the blessings!
                    </p>

                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Children-Book-popup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Children/Cooker’s-War-On-Boogers-thumbnaill.jpg"
                    alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Cooker’s War on Boogers
                    </h2>
                    <strong>Author: Sarah M. Forden
                    </strong>
                    <p>It’s holiday time, and oh what fun. Fall leaves have fallen, Spring has sprung, and Summer was
                        full of
                        hot
                        beachy sun. But now it’s time for Winter fun.

                    </p>
                    <p>Winter was Timmy’s favorite time of year. Sledding, snowing, hot cocoa-ing, children’s Christmas
                        lists
                        were
                        growing! Timmy simply could not wait; it was almost time for Winter break.
                    </p>
                    <p>Timmy loved coming to school. His teacher Mr. Bookman was the coolest of the cool. And Timmy also
                        had
                        many
                        friends, named Sara, Peter, Clark and Fin! His class was great, and they were extra jolly, it
                        was only
                        seven
                        more days until their holiday party.
                    </p>
                    <p>
                        Though the classroom was decked oh so grand, there were a group of germs who had other plans.
                        While Timmy
                        and his classmates were being smarties, The Booger Gang was ready to ruin the party.

                    </p>
                    <p>
                        “I’ll make them sneeze!” said Snosie Spittersplat. “It’ll help the Germy Wormys spread this way
                        and that.”
                    </p>
                    <p>
                        Mr. Coughinhog said “That will be grand! You know that kids hate to wash their hands! A little
                        cough here
                        and a big cough there, the Germy Wormys will be everywhere!”
                    </p>
                    <p>
                        Mucusmaximus boasted, “They’ll high-five their friends and give big hugs, they’ll share their
                        food, and
                        maybe the juice from their mugs. They’ll wipe their noses with their hands or their sleeves,
                        pick their
                        boogers and leave them places you wouldn’t believe!”
                    </p>
                    <p>
                        The Booger Gang put their plan into action, and upon their satisfaction, before poor Timmy and
                        his friends
                        could blink their eyes, the kiddos began to drop like flies!

                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Children-Book-popup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png"
                    data-img="images/new/Children/Amanda-and-Alena-go-on-an-Adventure-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Amanda and Alena go on an Adventure
                    </h2>
                    <strong>Author: Marta Kristen
                    </strong>
                    <p>Amanda and Alena are the best of friends. They do everything together: eat, sleep, run, and play
                        in the
                        field.

                    </p>
                    <p>When Alena can’t see Amanda, she calls out to her friend, and Amanda calls back. The two friends
                        are
                        inseparable.

                    </p>
                    <p>One day Amanda noticed that the barn door was left open just wide enough for both her and Alena
                        to sneak
                        through. They had to be very quiet because the farmer was fast asleep on a bale of hay.

                    </p>
                    <p>
                        Amanda being the curious, young, naive horse that she was, slipped past the farmer and out the
                        barn door,
                        down the windy path to explore the rest of the farm.

                    </p>
                    <p>
                        A wide farm stretched before her eyes; there was so much to see, so much to hear, so much to
                        listen to,
                        and
                        so much to eat.
                    </p>
                    <p>
                        Alena being like a mother to Amanda, could not let her go out into the world by herself, so she
                        decided to
                        go after her but not before stealing a bite of hay from where the farmer was sleeping. “A little
                        snack for
                        the road,” exclaimed Alena.
                    </p>
                    <p>
                        Amanda was already halfway down the path when she heard the sound of hooves coming up behind
                        her. Alena
                        finally caught up to Amanda and said, “We shouldn’t be out here. If we get caught, there will be
                        trouble.”
                        Amanda said they wouldn’t be gone long and that it was going to be fun. And it was fun.
                    </p>
                    <p>Tony, the donkey, ran along the fence line, “Hey girls, where are you going? Shouldn’t you be in
                        the
                        field?”</p>
                    <p>“We’re going on an adventure,” Amanda and Alena both let out a playful neigh.
                    </p>
                    <p>
                        Alena and Amanda saw all kinds of different things, from butterflies landing on their noses to
                        bumbling
                        bees
                        landing on all the colorful flowers. It was a picture-perfect summer day.
                    </p>
                    <p>
                        They even made some new friends along the way. They met Nellie, the Border Collie, who stopped
                        to say a
                        quick hello before going back to herding the sheep into their pen in a perfect line.
                    </p>
                    <p>
                        Further down the farm, Penny, the barn cat, came running down the grass, “Have you seen Jerry,
                        the house
                        mouse? We are playing hide and seek, and I can’t find him anywhere.” Amanda looked around
                        briefly but saw
                        no
                        sign of Jerry, “I can’t see him anywhere.”
                    </p>
                    <p>
                        It was then Alena’s turn to look for Jerry. Alena being the older, wiser mare, started to look
                        and sniff
                        around when she spotted the leaf pile the farmer had just collected. She nodded her head towards
                        the pile
                        where Jerry’s tail stuck out of the break in the leaves.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Children-Book-popup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Children/A-bit-too-sweet-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>A bit too sweet
                    </h2>
                    <strong>Author: Jamie Davidson


                    </strong>
                    <p>However, one fine day Angelo ends up going to the mall with his mommy and daddy for a quick
                        shopping
                        trip.

                    </p>
                    <p>That day, surprisingly, the mall had a "sweet day." The mall was full of sweet-themed characters
                        like
                        people in Kit-Kat, Snickers, Mars, and other sweet-based costumes. Suddenly, Angelo got so
                        excited after
                        seeing the entire mall dressed up in his favorite sweet treats. It had been over a month since
                        he had not
                        had a single bar of chocolate. He got so excited and told his mommy and daddy, "Mommy, Daddy,
                        look! There
                        are sweet treats everywhere!" Mommy and Daddy got very stunned. They weren't happy at all. They
                        wanted to
                        leave the mall that very instant. Daddy told Angelo, "Son, you know what the doctor told you.
                        These are
                        bad
                        for you. Let's go to GameStop nearby. I heard there are some new games out for the PlayStation."
                        Angelo
                        was
                        ignoring his mommy and daddy all this time, but he only heard GameStop from his daddy. He then
                        said,
                        "Sure.
                        Let's go to GameStop." Just as they were about to leave the mall, he saw a big and colorful sign
                        that
                        said,
                        "Sweet Mart. This way, please!" Angelo started begging and pleading with his parents to go to
                        the Sweet
                        Mart. He shouted, "Mommy, Daddy, please let me go to the Sweet Mart!" His daddy and mommy said
                        no, but he
                        insisted. He dragged them there. All this time, daddy was saying that GameStop would close, so
                        they should
                        leave now. Angelo didn't care. He wanted to go to the Sweet Mart. Once he got to the Sweet Mart,
                        it was
                        like
                        a dream house for sweet lovers. His mommy and daddy stopped him, but he started screaming. He
                        ran away
                        from
                        them inside the Sweet Mart. It was a huge supermarket size store; all dressed up in chocolate
                        and candies.
                        There were tons of children there with their own mommies and daddies. Angelo had run inside, and
                        his mommy
                        and daddy went after him. They tried looking for him, but he was nowhere to be found. The Sweet
                        Mart was a
                        maze. There were so many kids, and they all looked like Angelo, so his mommy and daddy were very
                        confused.
                        They started shouting his name, but Angelo didn't hear them. They decided to talk to mall
                        security.</p>
                    <p>When Angelo was inside, he couldn't stop himself from enjoying all the sweet treats on the walls
                        and
                        shelves. It was like a sweet, funhouse. There were chocolate shakes, malt drinks, and hot cocoa.
                        Angelo
                        forgot what the doctor told him and started having a lot of Candy. He forgot that he had a very
                        bad
                        stomach
                        ache the last time in school. All this while, mommy and daddy were speaking with security
                        officers to
                        locate
                        their son.

                    </p>
                    <p>While Angelo was busy enjoying all his sweet treats, He started feeling a little dizzy. It was
                        the same
                        feeling he had before. Angelo was feeling a little sick. Suddenly, he passed out and was in
                        dreamland. In
                        his dreams, he could see himself enjoying all the sweet treats and snacks. He was loving all of
                        it, and he
                        could hear the doctor and his mommy and daddy, but he still enjoyed them. While he was enjoying
                        himself,
                        he
                        heard a voice from afar! </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Children-Book-popup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Children/Manners-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Manners
                    </h2>
                    <strong>Author: Andrew J Kalaven
                    </strong>
                    <p>John had to spend the weekend over his grandparent’s house. He went directly from his school to
                        his
                        grandparent’s place.

                    </p>
                    <p>After getting back home from school, John entered into his aunt Petunia’s room and took her
                        mobile phone
                        without her permission.

                    </p>
                    <p>He used his aunt’s phone for about one hour before he went to sleep on her bed
                    </p>
                    <p>When John woke up in the evening
                        He decided to finish his homework, but couldn’t find his pencil box anywhere
                        He tried to find his box for as long as he could
                        And found out that it was being used by his younger sister Alexis
                    </p>
                    <p>This made John very upset and he felt uncomfortable
                        He told Alexis that he was worried he had forgotten the box at school because he couldn’t find
                        it
                        And that she should have informed or taken permission from him before taking his pencil box
                        Aunt Petunia was listening to all this from a distance
                        (Illustration: boy explaining to the little girl, while a woman in the 30’s, a redhead,
                        listening to their
                        conversation from the room)
                        When she saw John getting upset at this, she went to him and said, “I gave the box to Alexis so
                        she could
                        finish her work”
                    </p>
                    <p>
                        At this, John replied that she should have asked before taking his box
                        Aunt Petunia sat down with John and explained to him that he is rightfully upset, and that no
                        one should
                        take his belongings without asking for his permission. She reminded John that neither can he use
                        anyone’s
                        personal belongings without asking for their permission.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Fantasy-popup1">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fantasy/A-Serial-Killer-Explanation-thumbnaill.jpg"
                    alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>A Serial Killer Explanation
                    </h2>
                    <strong>Author: Victor Holt
                    </strong>
                    <p>“I kill her, and I will be fulfilled…But it never happens…So next woman, I will be fulfilled. But
                        it
                        never happens…So, kill again, I will be fulfilled…But, it never happens…Another girl…Another
                        girl…Another
                        girl…It will go on until I am stopped simply because…I will never be fulfilled! Before the kill,
                        I will be
                        fulfilled, I think I will but by history, I won't…”
                    </p>
                    <p>- Ted Bundy (Florida State Penitentiary, couple weeks before execution)

                    </p>
                    <p>A serial killer is typically, by law, a person who kills three or more people. Much of the
                        psychological
                        profile was made from conversations with Ted Bundy. Mental gratification is the usual motive for
                        multiple
                        killings. It does not matter what the FBI's psychological motive is. What does matter is it will
                        never
                        stop. The serial profile varies for different killers, but the real point is that, no matter
                        what reason,
                        the killings will never stop until he is arrested or killed.

                    </p>
                    <p>
                        Mick finally got a date with Melissa. He had been in contact with her for years. They knew each
                        other for
                        a long time through different friends, although they went to different high schools. It was the
                        summer
                        before they both went to college. They were going to different associations, but both academic
                        societies
                        were in the same city, so they were excited. Mick knew to keep the date hush-hush; fewer people
                        knew of
                        any relationship, the better. He told her he would make supper for her and they would watch some
                        cd movies
                        afterward, told her over the phone to tell her parents that she was going out with friends, be
                        back
                        whenever she did just that.

                    </p>
                    <p>
                        Mick looked out of the front window and saw Melissa’s car pull up, he thought. "Her car…have to
                        take care
                        of that later." He watched her walk up to the front door. He looked around as best he could to
                        see anyone
                        watching; he saw no one. His mom went to see her sister this weekend, so she would be gone the
                        whole week.
                        He quickly remembered when his mom and dad got divorced when he was a kid, the loud arguments,
                        dad
                        slapping mom several times. He felt useless for not helping mom, but at the time, he somehow
                        felt it was
                        not his problem. Melissa looked very good as she walked up to the front door, with long blond
                        hair, a
                        white t-shirt, and blue jeans with legs torn off. Awesome.

                    </p>
                    <p>
                        "Hi Missy," he opened the door for her without her knocking, got her into the house quickly.

                    </p>
                    <p>
                        "Hey Mick," she came in and put her purse on the coat hangers, and took her shoes off. "Oh,
                        smells good."

                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Fantasy-popup2">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fantasy/Capsule-Reality-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Capsule Reality

                    </h2>
                    <strong>Author: Mathew Wayne

                    </strong>
                    <p>“Yeah, I dug the buffet, just had me a French omelet and a strawberry shake, and I still feel
                        hungry…”
                        David responds.
                    </p>
                    <p>“Your stomach’s full, you idiot, your hunger ain’t,” Ray says; oh well, you got that right, said
                        Ray in a
                        seductive tone, and winked at David.
                    </p>
                    <p>David laughs and says, “not like that, you ass!” “So, what's the schedule look like?” he asked
                        ray.
                    </p>
                    <p>
                        His answer was, “well, we have the presentation at two, so we go on as usual. There's a quality
                        analysis
                        case study scheduled, which we will be over with by the time the presentation starts. Ladies and
                        gentlemen, may I present to you, the CEO of Barbs corp. Mr. Mark Doherty!” The crowd applauded.
                        Why
                        wouldn’t they? This was their boss, who they needed to suck up to or else face the
                        repercussions. Anyone
                        who has worked in an office knows how it is and just how important it is for an employee to fake
                        it in
                        front of their boss.</p>
                    <p>
                        The crowd was a mix of employees. Businessmen, media, government officials, and lawmen all made
                        up the
                        crowd that was in the office. No one was unnecessary, and each person was a cog that worked the
                        machinery
                        of the company so that it could achieve its goal. A crowd had come together to see what the CEO
                        had to say
                        to his employees. People's faces were painted with both curiosities surrounding the future as
                        well as
                        dismay at being made to listen to someone speaking so early in the morning. Most people are ok
                        with it,
                        but for the ones who aren’t, this can be nothing short of torturous.
                    </p>
                    <p>
                        David and Ray come quickly in between the crowd and manage to get a seat further away from the
                        stage. Ray
                        wasn’t the biggest fan of listening to his CEO ramble on about different things, so he decided
                        to sit at
                        the farthest possible seat in the crowd.

                    </p>
                    <p>
                        “Ah, I can barely see the man from here,” said David, to which Ray responded: “Who cares? All
                        that food
                        makes me sleepy anyway.” Said Ray as he hunched down the seat.

                    </p>
                    <p>Mark is seen coming to the stage with a big smile and his hand high above, greeting the crowd and
                        stepping towards the mic. He is in his late 30’s to early ’40s, white, tall, blonde slick black
                        hair, and
                        wore a navy blue three-piece with a white shirt and brown shoes.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Fantasy-popup3">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fantasy/Extra-terrestrial-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Extra-terrestrial
                    </h2>
                    <strong>Author: Carla Muse
                    </strong>
                    <p>
                        It was a cold winter night. The wind was howling. I, Sally Cooper, was lying in my bed. “What is
                        life?” I
                        thought to myself. I was rather sad. For reasons beyond my control, my heart ached.
                    </p>
                    <p>I had a difficult childhood. Among other things, I was a sensitive child. I couldn’t share my
                        mother with
                        anyone... by anyone, I mean, not even my siblings. She was on a mission to destroy my father
                        since their
                        breakup, and still to this day, don’t have kind words to say, and because she blames me for
                        everything or
                        says I'm not doing right leaves darkness in my heart. I love my mother, but I think she was
                        abused as a
                        child since all of her children were.
                    </p>
                    <p>I like my stepdad, but there is a lot he doesn't know. He loves my mother a lot, and I respect
                        him for
                        this. However, I still didn’t like sharing mom with anyone. This isn't because of jealousy; this
                        is
                        because she hates the fact that I'm smart and pretty. And tries to control me. She is the most
                        two-faced
                        woman I have ever met and has dark secrets that ever surfaced would shame her. Even this doesn’t
                        bother me
                        anymore.
                    </p>
                    <p>After all, she was my mother. A part of yearning lingered in my heart. Undiscovered territories
                        of love
                        were yet to be conquered.
                    </p>
                    <p>
                        Not that, something which gave me enough yearning and affection helped me in sharing my mom with
                        other
                        people around me, but it gave me satisfaction, and it gave me a sense of belonging.
                    </p>
                    <p>For a moment, that happened too abruptly... I didn’t expect the best thing in my life to come
                        like this.
                        It was dark. I turned off my reading lamp and was about to delve into the world of dreams, where
                        everything was perfectly fine.
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
    <div class="portfolio-modal" style="display: none;" id="Fantasy-popup4">
        <div class="row">
            <div class="col-md-5">
                <img src="images/blank-img.png" data-img="images/new/Fantasy/Kill-with-a-Shot-thumbnaill.jpg" alt="">
            </div>
            <div class="col-md-7">
                <div class="portfolio-modal-content">
                    <h2>Kill with a Shot
                    </h2>
                    <strong>Author: Suzanne Bailey
                    </strong>
                    <p>Abraham Beaumont was tired of the war in front of him, "Damn Germans," he whispered. He felt as
                        though
                        WW1 would be coming to an end soon. He viewed the bunkers, barbed wire, wounded soldiers,
                        trenches for
                        communication, and food for starving men. The front he perceived, he judged, had enemies 50
                        yards away,
                        ingested their trenches. He was a French Captain, been in the Ypres Salient for over a year, and
                        it was
                        towards the end of October 1918.

                    </p>
                    <p>Edgar, a mere private but Captain Beaumont's favorite inferior, crawled up slowly near the
                        captain and
                        gave him a monocular, whispered, "What do you see, Abee?”
                    </p>
                    <p>He used his aunt’s phone for about one hour before he went to sleep on her bed
                    </p>
                    <p>"Not much," he whispered back, put the monocular up to his left eye, "I have seen the tops of
                        men's heads
                        moving south in their bunkers. I think they are trying to move heavy stuff, a new canon or
                        chemicals to
                        throw in our face."
                    </p>
                    <p>"Those fucking bastards," replied Ed, "I would rather be shot than breathe that crap they throw
                        like
                        grenades."
                    </p>
                    <p>
                        "They are desperate; they are losing this war and this battle. Desperate men would do anything
                        to turn the
                        tide in their favor."
                    </p>
                    <p>Ed looked at his captain, he knew he was sharp-witted and intelligent when it came to analyzing
                        and
                        scanning the enemy, but his entire time, Ed never saw Abee kill anything. He gave orders; that
                        was pretty
                        much it.
                    </p>
                    <p>
                        "Abee," said Ed. "We have some more soldiers coming in to end this war, the general and all the
                        upper
                        management think these are the final days for our enemy, we must know to ourselves and them the
                        end will
                        be soon, more backup will let the Germans know that too."
                    </p>
                </div>
            </div>
        </div>
        <div class="btn-wrap-group text-center mt-4">
            <a href="javascript:;" class="btn btn-theme tra-black-hover quotePopup mb-10">Contact us now
            </a>
            <a href="javascript:;" class="btn btn-tra-black theme-hover last-link open_chat_btn mb-10">Talk to us
            </a>
        </div>
    </div>
</div>
<div class="side-contact">
    <a href="mailto:info@scriptpublishers.com"><i
            class="fa fa-envelope"></i><span class="info@scriptpublishers.com" style="margin:-2px !important"
           >info@scriptpublishers.com</span></a>
    <!--<a href="javascript:;" class="open_chat_btn" style="display:block !important"><i class="fa fa-comments"></i>Talk to us-->
    <!--</a>-->
</div>
<div class="side-form-wrapper">
    <button class="side-form-btn">Talk to our script publishersStrategists.</button>
    <div class="side-form">

        <form class="leadform lfcta" method="POST" data-fid="go76FMp3ljTC2siP2R0leSuTEMil12T6IFd5vdiS" data-source="popup" data-fid="go76FMp3ljTC2siP2R0leSuTEMil12T6IFd5vdiS" action="{{url('/application-process')}}">
            {{csrf_field()}} >
            <h3>Get your book writing started today.</h3>
            <input type="text" name="name" class="form-control m-2 c_field" placeholder="Name" required>
            <input type="email" name="email" class="form-control m-2 c_field" placeholder="Email" required>
            <input type="text" name="phone" class="form-control m-2 facility_phone_number c_field"
                onkeypress="return isNumberKey(event)" minlength="10" maxlength="12" placeholder="Phone" required>
            <textarea name="meassage" cols="30" rows="5" class="form-control m-2 c_field" placeholder="Message"
                required></textarea>
            <button data-nextFormID="secondFormSidebar" type="submit"
                class="btn btn-theme tra-white-hover w-100 m-2 c_btn lfbtn"
                data-bodyClass="sideform-step-two">Submit</button>
            <p class="success_msg lfmsg d-none">Your form has been submitted</p>
        </form>
        <form class="second-step-leadform lfcta"method="POST"  id="secondFormSidebar" style="display: none;" data-source="popup" data-fid="go76FMp3ljTC2siP2R0leSuTEMil12T6IFd5vdiS" action="{{url('/application-process')}}">
            {{csrf_field()}} >
            <h3>Litte More Information</h3>
            <div class="mb-3">
                <label>1. What is the Genre of your Book?</label>
                <select class="form-control" id="genre" name="genre[]">
                    <option value="">Select Genre</option>
                    <option value="Children-Book">Children's Book</option>
                    <option value="General fiction">General fiction</option>
                    <option value="Autobiography">Autobiography</option>
                    <option value="Strategy-Management-and-Business-Books">Strategy, Management
                        &
                        Business
                        Books</option>
                    <option value="Self-help">Self-help</option>
                    <option value="Medicine-IT-and-Computer-Science">Medicine and IT & Computer
                        Science
                    </option>
                    <option value="Mystery-and-Thriller ">Mystery & Thriller </option>
                    <option value="Comic-Fantasy-and-Adventure">Comic, Fantasy & Adventure
                    </option>
                    <option value="Cook Book">Cook Book</option>
                    <option value="History-Poetry-and-Religion">History, Poetry & Religion
                    </option>
                </select>
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-bolder">2. Is your book complete and ready to
                    publish?</label>
                <div class="custom-radio">
                    <input type="radio" name="ready_to_publish" id="ready_to_publish1" value="Yes">
                    <label for="ready_to_publish1">Yes</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="ready_to_publish" id="ready_to_publish2" value="No">
                    <label for="ready_to_publish2">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="Describe the book in three basic sentences:" class="form-label">
                    3.How many pages are you planning for the book?
                </label>
                <input type="text" class="form-control" name="no_of_pages" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label fw-bolder">4. Are you looking for help to publish
                    it?</label>
                <div class="custom-radio">
                    <input type="radio" name="help_to_publish" id="help_to_publish1" value="Yes">
                    <label for="help_to_publish1">Yes</label>
                </div>
                <div class="custom-radio">
                    <input type="radio" name="help_to_publish" id="help_to_publish2" value="No">
                    <label for="help_to_publish2">No</label>
                </div>
            </div>
            <div class="mb-1">
                <label for="Describe the book in three basic sentences:" class="form-label">5.
                    Tell
                    Us about
                    your book in a few words</label>
                <textarea class="form-control" name="describe" placeholder="Tell Us about your book in a few words"></textarea>
            </div>
            <div class="btn-wrap">
                <button class="btn btn-skip open_chat_btn">Skip</button>
                <button type="submit"
                    class="btn btn-theme tra-white-hover w-100 m-2 c_btn lfbtn open_chat_btn">Submit</button>
            </div>
        </form>
    </div>
</div>
<div class="custom-ovarlay"></div>

<script data-cfasync="false" src="https://cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
<script src="{{asset('public/assets/js/jquery-3.5.1.min.js')}}"></script>
<script src="{{asset('public/assets/js/bootstrap.min.js')}}" defer></script>
<script src="{{asset('public/assets/js/all-plugin30f4.js?v=3')}}" defer></script>
<script src="{{asset('public/assets/js/slick.min.js')}}" defer></script>
<script src="{{asset('public/assets/js/jquery.fancybox.min.js')}}" defer></script>
<script src="{{asset('public/assets/js/menu.min.js')}}" defer></script>
<script src="{{asset('public/assets/js/custom.min.js')}}" defer></script>
{{-- <script async src="http://app.script publishers.com/js/main.js" defer></script> --}}
<script async src="{{asset('public/assets/js/modernizr.js')}}" defer></script>
<script>
  $(".hide-popup, #secondFormPopup .btn-wrap .btn").click(function () {
    $(".contact_popup").modal("hide");
  })
  jQuery.fn.extend({
    renameAttr: function (e, t, a) {
      var o;
      return this.each(function () {
        o = jQuery.attr(this, e), jQuery.attr(this, t, o), jQuery.removeAttr(this, e), !1 !== a && jQuery
          .removeData(this, e.replace("data-", ""))
      })
    }
  })
  $(window).scroll(function () {
    $("img").renameAttr("data-img", "src");
  });
</script>
