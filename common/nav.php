<nav class="nav nav-tabs flex-column flex-sm-row">
  <a class="flex-sm-fill text-sm-center nav-link <?= ($_GET['action']!='assignments'? 'active' : ''); ?>" href="index.php?action=about">About</a>
  <a class="flex-sm-fill text-sm-center nav-link <?= ($_GET['action']=='assignments'? 'active' : ''); ?>" href="index.php?action=assignments">Assignments</a>
</nav>