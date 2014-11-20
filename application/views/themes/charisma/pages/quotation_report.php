
                <!-- put your content here -->
                <?php if($quotationhdr != null): ?>
                <table>
                    <tr>
                        <td><strong>No</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->TxnQuotHdrNo;?></td>
                    </tr>
                    <tr>
                        <td><strong>Re</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->TxnQuotHdrRemarks;?></td>
                    </tr>
                     <tr>
                        <td><strong>To</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->cust_name;?></td>
                    </tr>
                     <tr>
                        <td><strong>Attn</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->attention;?></td>
                    </tr>
                    <tr>
                        <td><strong>Address</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->addr1;?></td>
                    </tr>
                    <?php if($quotationhdr->addr2 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->addr2;?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($quotationhdr->addr3 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->addr3;?></td>
                    </tr>
                    <?php endif; ?>
                    <tr>
                        <td><strong>Phone/Fax</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->notelp.' / '.$quotationhdr->fax;?></td>
                    </tr>
                     <tr>
                        <td><strong>Cc</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->cc;?></td>
                    </tr>
                     <tr>
                        <td><strong>Email</strong></td>
                        <td>:</td>
                        <td><?php echo $quotationhdr->email1;?></td>
                    </tr>
                    <?php if($quotationhdr->email2 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->email2;?></td>
                    </tr>
                    <?php endif; ?>
                    <?php if($quotationhdr->email3 != ''): ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><?php echo $quotationhdr->email3;?></td>
                    </tr>
                    <?php endif; ?>
                </table>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>NO</th>
                            <th>ITEM</th>
                            <th>QTY ORDER</th>
                            <th>PRICE / UNIT</th>
                            <th>AMOUNT</th>
                            <th>REMARKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if($quotationdtl !=null):
                        $no = 1;
                        if($quotationdtl != null):
                            foreach($quotationdtl as $row):
                        ?>
                        <tr>
                            <td><?php echo $no;?></td>
                            <td><?php echo $row->item_type.' '.$row->item_variant.' '.$row->item_size;?></td>
                            <td><?php echo $row->qty;?></td>
                            <td><?php echo 'Rp. '.rupiah($row->price);?></td>
                            <td><?php echo 'Rp. '.rupiah($row->amount);?></td>
                            <td><?php echo $row->remarks;?></td>
                        </tr>
                        <?php
                        ++$no;
                        endforeach;
                        endif;
                        ?>
                        <tr rowspan="2">
                            <td colspan="3" rowspan="3"></td>
                            <td>Sub Total</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrSubTotal);?></td>
                            <td rowspan="3"></td>
                        </tr>
                        <tr>
                          
                            <td>PPN 10%</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrPpn);?></td>
                        </tr>
                         <tr>
                         
                            <td>Total</td>
                            <td><?php echo 'Rp. '.rupiah($quotationhdr->TxnQuotHdrTotal);?></td>
                        </tr>
                        <?php
                        else:
                            echo "<tr><td colspan='6'>No Found Data</td></tr>";
                        endif;
                        ?>
                    </tbody>
                </table>
                <?php
                else:
                    echo "<h3>No Data</h3>";
                endif;
                ?>
           