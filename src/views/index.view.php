<?php include __DIR__ . "/base/head.php" ?>

<body>
  <?php include __DIR__ . "/base/header.view.php" ?>

  <div class="w-11/12 max-w-[1200px] mx-auto py-10">
    <div class="grid grid-cols-12 gap-10">
      <div class="col-start-1 col-end-5">
        <h1 class="text-xl uppercase font-bold text-slate-800 pb-5">CREATE NEW TASK</h1>

        <?php include __DIR__ .  "/forms/task.form.php" ?>
      </div>
      <div class="col-start-5 col-end-13 pt-10">
        <?php include __DIR__ .  "/components/table.component.php" ?>
      </div>
    </div>
  </div>
</body>

</html>
