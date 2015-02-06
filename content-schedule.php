<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?> 
        <!-- custom schedlue content -->
  <div role="tabpanel" id="the_schedule_panels">
    <ul class="nav nav-tabs nav-justified nav-tabs-custom" role="tablist">
      <li role="presentation" class="active"><a href="#sunday" aria-controls="sunday" role="tab" data-toggle="tab">Sunday</a></li>
      <li role="presentation"><a href="#monday" aria-controls="monday" role="tab" data-toggle="tab">Monday</a></li>
      <li role="presentation"><a href="#tuesday" aria-controls="tuesday" role="tab" data-toggle="tab">Tuesday</a></li>
      <li role="presentation"><a href="#wednesday" aria-controls="wednesday" role="tab" data-toggle="tab">Wednesday</a></li>
      <li role="presentation"><a href="#thursday" aria-controls="thursday" role="tab" data-toggle="tab">Thursday</a></li>
      <li role="presentation"><a href="#friday" aria-controls="friday" role="tab" data-toggle="tab">Friday</a></li>
      <li role="presentation"><a href="#saturday" aria-controls="saturday" role="tab" data-toggle="tab">Saturday</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content tab-content-custom">
      <!-- Sunday -->
      <div role="tabpanel" class="tab-pane fade in active" id="sunday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>10:30 AM</td>
              <td>Open Gym</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>Barbell Club</td>
            </tr>
            <tr>
              <td>1:00 PM</td>
              <td>Olympic Lifting Workshop</td>
            </tr>
            <tr>
              <td>6:00 PM</td>
              <td>Open Gym</td>
            </tr>
            <tr>
              <td>7:00 PM</td>
              <td>Yoga</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- Monday -->
      <div role="tabpanel" class="tab-pane fade in" id="monday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>7:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>1:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>4:30 PM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>7:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

      <!-- Tuesday -->
      <div role="tabpanel" class="tab-pane fade in" id="tuesday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>7:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>1:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>4:30 PM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

       <!-- Wednesday -->
      <div role="tabpanel" class="tab-pane fade in" id="wednesday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>7:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>1:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>4:30 PM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>7:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

       <!-- Thursday -->
      <div role="tabpanel" class="tab-pane fade in" id="thursday">
       <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>7:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>1:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>4:30 PM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>7:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>8:30 PM</td>
              <td>Yoga</td>
            </tr>
          </tbody>
        </table>
      </div>

       <!-- Friday -->
      <div role="tabpanel" class="tab-pane fade in" id="friday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>5:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>7:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:30 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>11:00 AM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>1:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Open Gym</li>
                </ul>
              </td>
            </tr>
            <tr>
              <td>4:30 PM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>6:30 PM</td>
              <td>
                <ul>
                  <li>WOD</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>

     <!-- Saturday -->
      <div role="tabpanel" class="tab-pane fade in" id="saturday">
        <table class="table table-striped table-responsive workout-schedule">
          <thead>
            <tr>
              <th>Start Time</th>
              <th>Programs</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>8:00 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>9:00 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>10:00 AM</td>
              <td>WOD</td>
            <tr>
              <td>11:00 AM</td>
              <td>WOD</td>
            </tr>
            <tr>
              <td>12:00 PM</td>
              <td>
                <ul>
                  <li>Free Class</li>
                  <li>Single Lifts Only</li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
        <!-- /end custom schedule content -->
		<?php
		/**
		 * This wp_link_pages option adapt to use bootstrap pagination style.
		 * The other part of this pager is in inc/template-tags.php function name bootstrapBasicLinkPagesLink() which is called by wp_link_pages_link filter.
		 */
		wp_link_pages(array(
			'before' => '<div class="page-links">' . __('Pages:', 'bootstrap-basic') . ' <ul class="pagination">',
			'after'  => '</ul></div>',
			'separator' => ''
		));
		?>
	</div><!-- .entry-content -->
	
	<footer class="entry-meta">
		<?php bootstrapBasicEditPostLink(); ?> 
	</footer>
</article><!-- #post-## -->