    <?php
        if($_SESSION['tipo_de_conta'] == 'admin'):
          //require_once 'php/logado-admin.php';
        else:
          //require_once 'php/logado-user.php';
        endif;
    ?>

  <nav class="pushy pushy-left" data-focus="#first-link">
    <div class="pushy-content">
      <ul>
      <li class="pushy-link"><a href="logado.php">&#9750; Home</a></li>
      <li class="pushy-submenu">
        <button id="first-link">&#9750; APRESENTAÇÃO</button>
          <ul>
            <li class="pushy-link-two"><a href="logado.php?action=all">TODOS</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=mhd">MEMORIA SECUNDARIA: HD</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=ppa">PORTA PARALELA</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=mpr">MEMORIA PRINCIPAL: RAM</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=pci">PCI</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=cpu">CPU</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=cns">CHIPSET NORTE E SUL</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=mdr">MEMORIA SECUNDARIA: DVD ROM</a></li>
            <li class="pushy-link-two"><a href="logado.php?action=fal">FONTE DE ALIMENTAÇÃO</a></li>
          </ul>
      </li>
      <li class="pushy-link"><a href="?action=sair">&#9750; Sair</a></li>


<!--
        <li class="pushy-submenu">
          <button id="first-link">&#9750; INICIO</button>
          <ul>
            <li class="pushy-link"><a href="#">Item 1</a></li>
            <li class="pushy-link"><a href="#">Item 2</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="pushy-submenu">
          <button>Submenu 2</button>
          <ul>
            <li class="pushy-link"><a href="#">Item 1</a></li>
            <li class="pushy-link"><a href="#">Item 2</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="pushy-submenu">
          <button>Submenu 3</button>
          <ul>
            <li class="pushy-link"><a href="#">Item 1</a></li>
            <li class="pushy-link"><a href="#">Item 2</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="pushy-submenu">
          <button>Submenu 4</button>
          <ul>
            <li class="pushy-link"><a href="#">Item 1</a></li>
            <li class="pushy-link"><a href="#">Item 2</a></li>
            <li class="pushy-link"><a href="#">Item 3</a></li>
          </ul>
        </li>
        <li class="pushy-link"><a href="#">Item 1</a></li>
        <li class="pushy-link"><a href="#">Item 2</a></li>
        <li class="pushy-link"><a href="#">Item 3</a></li>
        <li class="pushy-link"><a href="#">Item 4</a></li>
      </ul>
-->
    </div>
  </nav>