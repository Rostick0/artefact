@extends('layout.client.layout')
@section('seo_title', 'Contacts')

@section('content')
    <x-banner-nav title="FAQ" :navigations="$navigations" />
    <section class="faq">
        <div class="container">
            <h2 class="title-section faq__title">FAQ</h2>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What is 3D visualization?</strong></summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">3D visualization is the process of creating digital models of objects or scenes in
                        three dimensions, which can be viewed from any angle. This technique is often used in architecture,
                        engineering, product design, and video game development.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What kind of projects can you create 3D visualizations for?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">We can create 3D visualizations for a wide variety of projects, including
                        architectural renderings, product design concepts, and video.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>How long does it take to create a 3D visualization?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">The time it takes to create a 3D visualization depends on the complexity of the
                        project and the level of detail required. Simple projects may only take a few days, while more
                        complex projects may take several weeks or even months. We'll work with you to develop a timeline
                        that meets your needs.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>How do you ensure the accuracy of your 3D visualizations?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">We use advanced 3D modeling software and techniques to create highly accurate 3D
                        models. We'll work closely with you to ensure that the final product meets your specifications and
                        accurately represents the intended design. We also offer revisions to make any necessary adjustments
                        to the model.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What is the pricing for 3D visualization services?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">The pricing for 3D visualization services varies depending on the complexity of
                        the project, the level of detail required, and the timeline for delivery. We'll provide you with a
                        detailed quote based on your specific project requirements.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>How do I get started with a 3D visualization project?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">To get started with a 3D visualization project, simply contact us through email.
                        We'll discuss your project needs and provide you with a detailed quote and timeline for delivery.
                        Once you're ready to move forward, we'll begin the modeling process and keep you updated throughout
                        the project.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What software do you use to create 3D graphics?</strong></summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">We use a variety of software programs to create 3D graphics, including 3ds Max,
                        Corona Render, Photoshop and Lumion.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>How can we send you materials for the 3D visualization?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">You can send us your materials through email, file-sharing platforms, or other
                        digital means. We'll work with you to ensure that the materials are compatible with our software and
                        can be used in the 3D modeling process.</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What information do you need to create a 3D visualization of
                        Exterior?</strong></summary>
                <div class="faq__item_text">
                    <p class="faq__item_p"><span style="text-decoration: underline;">Plans:</span></p>
                    <p class="faq__item_p">- Floor plans of the house(s);</p>
                    <p class="faq__item_p">- Adjoining site plan or master plan;</p>
                    <p class="faq__item_p">- Site plan;</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Materials:</span></p>
                    <p class="faq__item_p">- Texture;&nbsp;</p>
                    <p class="faq__item_p">- Colour schemes of the buildings;</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Additional information:</span></p>
                    <p class="faq__item_p">- Number of views.</p>
                    <p class="faq__item_p">- Required resolution of the final renderings;</p>
                    <p class="faq__item_p">- Type of lighting: Daylight, Night.</p>
                    <p class="faq__item_p">- Referenses</p>
                </div>
                <div class="faq__item_text">&nbsp;</div>
                <div class="faq__item_text"><br>Photographs or drawing of interior details, dimensions.
                    <p class="faq__item_p">It is recommended to use AutoCAD format (dxf, dwg) to transfer the drawings.</p>
                    <br>
                    <p class="faq__item_p">If the information is incomplete, the cost and the execution time can be
                        increased.</p>
                    <p class="faq__item_p">**Drawings should be submitted in AutoCAD or PDF format</p>
                </div>
            </details>

            <details class="faq__item">
                <summary class="faq__item_title"><strong>What information do you need to create a 3D visualization of
                        Interior?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">Desired camera locations and views, number of cameras.</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Time:</span> evening, day, night.</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Plans:</span></p>
                    <p class="faq__item_p">- Ceiling plan;</p>
                    <p class="faq__item_p">- Layout of furniture;</p>
                    <p class="faq__item_p">- Floor plan;</p>
                    <p class="faq__item_p">- Lighting plan.</p>
                    <br>
                    <p class="faq__item_p">Also indicate the desired filling with the elements.</p>
                    <br>
                    <p class="faq__item_p">Photographs or drawing of interior details, dimensions.</p>
                    <br>
                    <p class="faq__item_p">It is recommended to use AutoCAD format (dxf, dwg) for transferring the drawings.
                    </p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Materials:</span></p>
                    <p class="faq__item_p">- The texture and colour scheme of the flooring;</p>
                    <p class="faq__item_p">- Wall texture and colour schemes;</p>
                    <p class="faq__item_p">- Texture and colour schemes for doors, furniture, windows and other interior
                        details.</p>
                    <br>
                    <p class="faq__item_p">If incomplete information is provided, the cost and execution time may be
                        increased.</p>
                    <br>
                    <p class="faq__item_p">*All provided input data is entered into the project documentation.</p>
                    <br>
                    <p class="faq__item_p">**Drawings should be submitted in AutoCAD format.</p>
                    <br>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What information do you need to create a 3D visualization of
                        Products?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">- Drawings</p>
                    <p class="faq__item_p">- Referenses</p>
                    <p class="faq__item_p">- Information where the images will be used</p>
                    <p class="faq__item_p">- Required resolution of the final renderings;</p>
                </div>
            </details>
            <details class="faq__item">
                <summary class="faq__item_title"><strong>What is the process from the inception phase to project
                        implementation?</strong>
                </summary>
                <div class="faq__item_text">
                    <p class="faq__item_p">The project is divided into several stages. At the end of each stage, we provide
                        the client with a report on the work already completed.</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">First stage: </span>You provide us with
                        all the collected material necessary for 3D visualization (drawings, photos, references, sketches
                        etc.). You specify the desired deadline for the finished work. Afterwards, we specify the
                        requirements specification and cost. In case of successful negotiations you pay 50% of the cost of
                        the work and we, in our turn, start the work.</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Second stage: </span>Stage of draft
                        (technical) visualization. We send you technical illustrations of your project (interior, exterior).
                        At this stage you will clearly see the contours of objects, their location and lighting. If edits
                        and changes are necessary, we do so.</p>
                    <br>
                    <p class="faq__item_p"><span style="text-decoration: underline;">Step three:</span> If you have no
                        comments, we make a final rendering of the angles in the required resolution.</p>
                    <p class="faq__item_p">You then pay 50% of the remaining cost and we send you the finished work.</p>
                </div>
            </details>
        </div>
    </section>
@endsection
