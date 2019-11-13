<?php require_once('../private/init.php'); ?>

<?php $page_title = "Courses"; ?>


<?php include(SHARED_PATH . '/public_header.php'); ?>

<div>
    <div>
        <div>
            <img src="<?= url_for('images/brain-small.jpeg') ?>" alt="feed your brain">
            <h2>Our Inventory of Used Bicycles</h2>
            <p>Choose the bike you love.</p>
            <p>We will deliver it to your door and let you try it before you buy it.</p>
        </div>

        <table >
            <tr>
                <th>Course Name</th>
                <th>Organization</th>
                <th>Teacher</th>
                <th>Level</th>
                <th>Subject</th>
                <th>long in hours</th>
                <th>Completion?</th>
                <th>Rate</th>
                <th>Date of Complete it</th>
                <th>link</th>
                <th>Notes</th>
            </tr>
            <tr>
                <td>Course Name</td>
                <td>Organization</td>
                <td>Teacher</td>
                <td>Level</td>
                <td>Subject</td>
                <td>long in hours</td>
                <td>Completion?</td>
                <td>Rate</td>
                <td>Date of Complete it</td>
                <td>link</td>
                <td>Notes</td>
            </tr>

        </table>
    </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>