<?php require_once('../private/init.php'); ?>

<?php $page_title = "Courses"; ?>


<?php include(SHARED_PATH . '/public_header.php'); ?>

<div>
    <div class="main courses">
        <div class="row">
            <div class="ten columns item-text">
                <h2>هذه جميع الكورسات التي أخذتها</h2>
            </div>
            <div class="two columns item-img">
                <img src="<?= url_for('images/brain-small.jpeg') ?>" alt="feed your brain">
            </div>

        </div>
        <div class="row">
            <div class="twelve columns">
            <table class="rtl courses-table">
                <thead>
                    <tr>
                        <th>اسم الكورس</th>
                        <th>المؤسسة</th>
                        <th>مقدم المحتوى</th>
                        <th>المستوى</th>
                        <th>المادة</th>
                        <th>اللغة</th>
                        <th>الطول بالساعات</th>
                        <th>مكتملة؟</th>
                        <th>التقييم الشخصي</th>
                        <th>تاريخ الإكمال</th>
                        <th>الرابط</th>
                        <th>ملاحظات</th>
                    </tr>
                </thead>

                <?php
                $parse = new ParseCSV(PRIVATE_PATH . '/my_courses.csv');
                $courses_array = $parse->parse();
                ?>

                <?php foreach ($courses_array as $args) : ?>

                    <?php $course = new Course($args); ?>

                    <tbody>
                        <tr>
                            <td><?= h($course->name); ?> </td>
                            <td><?= h($course->organization); ?> </td>
                            <td><?= h($course->teacher); ?> </td>
                            <td><?= h($course->level); ?> </td>
                            <td><?= h($course->subject); ?> </td>
                            <td><?= h($course->language); ?> </td>
                            <td><?= h($course->long_in_hours); ?> </td>
                            <td><?= h($course->is_complete); ?> </td>
                            <td><?= h($course->rating); ?> </td>
                            <td><?= h($course->date_complete); ?> </td>
                            <td> <a target="_blank" href=" <?= h($course->link); ?>">الرابط</a> </td>
                            <td><?= h($course->notes); ?> </td>
                        </tr>
                    </tbody>

                <?php endforeach; ?>
            </table>
            </div>
            
        </div>

    </div>
</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>