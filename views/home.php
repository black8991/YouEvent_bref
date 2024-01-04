    <!-- <img src="https://www.adobe.com/content/dam/www/us/en/events/overview-page/eventshub_evergreen_opengraph_1200x630_2x.jpg" class="" alt="..."> -->

    <div class="container">

        <div class="row my-5">

            <div class="row">
                <?php if (!empty($users)): ?>
                    <?php foreach ($users as $event): ?>
                        <div class="col-sm-4 mb-3 mb-sm-0">
                            <div class="card" style="width: 18rem;">
                            <!--echo $event->image;-->
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQjODLVZM3fze6nrZ1PtWaidPJcAEjOhyI17g&usqp=CAU" class="card-img-top" alt="Event Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $event->name; ?></h5>
                                    <p class="card-text"><?php echo $event->description; ?></p>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Date: <?php echo $event->date; ?></li>
                                    <li class="list-group-item">Location: <?php echo $event->location; ?></li>
                                </ul>
                                <div class="card-body">
                                    <a href="/details?id=<?= $event->id_event?>" class="btn btn-primary">Details</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No events found.</p>
                <?php endif; ?>
            </div>
        </div>


    </div>