<div class="relative overflow-x-auto">

  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          Title
        </th>
        <th scope="col" class="px-6 py-3">
          Description
        </th>
        <th scope="col" class="px-6 py-3">
          Actions
        </th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($tasks as $task) : ?>
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
          <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><?php echo $task["title"] ?></th>
          <td class="px-6 py-4"><?php echo $task['description'] ?></td>
          <td class="px-6 py-4 flex gap-3">
            <button class="p-.5">✏️</button>
            <button class="p-.5">🗑️</button>
          </td>
        </tr>
      <?php endforeach ?>
    </tbody>
  </table>
</div>
