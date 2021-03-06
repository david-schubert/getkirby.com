<nav class="submenu col-2-6" role="navigation">
  <h2 class="vh">Sub Menu</h2>
  <ul>
    <?php foreach($site->find('docs')->children()->visible() AS $p): ?>
    <li>
      <a<?php e($p->isActive(), ' class="is-active"') ?> href="<?php echo $p->url() ?>"><?php echo $p->title() ?></a>

      <?php if($p->hasChildren() and $p->isOpen()): ?>
      <ul>
        <?php foreach($p->children()->visible() AS $child): ?>
        <li>
          <a<?php e($child->isActive(), ' class="is-active"') ?> href="<?php echo $child->url() ?>"><?php echo $child->title() ?></a>

          <?php if($child->hasChildren() and $child->isOpen()): ?>
          <ul>
            <?php foreach($child->children()->visible() AS $subchild): ?>
            <li>
              <a<?php e($subchild->isOpen(), ' class="is-active"') ?> href="<?php echo $subchild->url() ?>"><?php echo $subchild->title() ?></a>

              <?php if($subchild->hasChildren() && $subchild->isOpen()): ?>
              <ul>
                <?php foreach($subchild->children()->visible() AS $subchild): ?>
                <li>
                  <a<?php e($subchild->isOpen(), ' class="is-active"') ?> href="<?php echo $subchild->url() ?>"><?php echo $subchild->title() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
              <?php endif ?>

            </li>
            <?php endforeach ?>
          </ul>
          <?php endif ?>

        </li>
        <?php endforeach ?>
      </ul>
      <?php endif ?>

    </li>
    <?php endforeach ?>
  </ul>
</nav>