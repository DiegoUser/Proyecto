<div class="tableFooter">
                        <button class="botonTotal" type="button" onclick="SetBox('total')"><strong>Mostrar Total</strong></button>
                        <div id="total">
                            <?php
                            if ($total !== 0) {
                                echo $total;
                            }
                            ?>
                        </div>
                    </div>