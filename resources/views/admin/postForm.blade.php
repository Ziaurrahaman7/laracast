@include('post.header')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <form action="/post/admin/create" method="POST" enctype="multipart/form-data">
                @csrf
                <x-form.input name="title"/>
                <x-form.input name="slug"/>
                <x-form.input name="image" type="file"/>
                <x-form.textarea name="excrept"/>
                <x-form.label name="category"/>
              <select name="categorie_id" class="form-select mt-3 form-control">
                  @foreach (\App\Models\Categorie::all() as $category)
                  <option value="{{$category->id}}" {{old('categorie_id')== $category->id ? 'selected' : ''}}>{{ucwords($category->name)}}</option>
                  @endforeach
              </select>
              <x-form.textarea name="body"/>
               <x-form.button name="submit"/>

            </form>
        </div>
    </div>
</div>
@include('post.footer')


<table class="table custom-table table-bordered">
	<thead>
		<tr class="heading-bg-color">
			<th>SL No</th>
			<th>Offer Description</th>
			<th>Validity (days)</th>
			<th>Price (BDT)</th>
			<th>Recharge</th>
			<th>USSD</th>
			<th>Pack ID</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td>1</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-fb--insta-for-15-days">1GB FB + Insta</a></td>
			<td>15 Days</td>
			<td>12</td>
			<td>12</td>
			<td>*123*012#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-fb--insta-for-15-days">RBS220021C</a></td>
		</tr>
		<tr>
			<td>2</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/300-mb-for-3-days">300MB</a></td>
			<td>3 Days</td>
			<td>17</td>
			<td>17</td>
			<td>*123*017#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/300-mb-for-3-days">RBD220003A</a></td>
		</tr>
		<tr>
			<td>3</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/800-mb-for-3-days">800MB</a></td>
			<td>3 Days</td>
			<td>29</td>
			<td>29</td>
			<td>*123*029#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/800-mb-for-3-days">RBD220005A</a></td>
		</tr>
		<tr>
			<td>4</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-for-3days">1GB</a></td>
			<td>3 Days</td>
			<td>32</td>
			<td>32</td>
			<td>*123*32#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-for-3days">RBD220006A</a></td>
		</tr>
		<tr>
			<td>5</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-for-30-days">1GB</a></td>
			<td>30 Days</td>
			<td>132</td>
			<td>132</td>
			<td>*123*132#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-for-30-days">RBD220006D</a></td>
		</tr>
		<tr>
			<td>6</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/38-tk-pack">1.2GB</a></td>
			<td>3 Days</td>
			<td>38</td>
			<td>38</td>
			<td>*123*038#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/38-tk-pack">RBD220007A</a></td>
		</tr>
		<tr>
			<td>7</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/49-tk-pack">1.7GB</a></td>
			<td>3 Days</td>
			<td>49</td>
			<td>49</td>
			<td>*123*049#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/49-tk-pack">RBD220010A</a></td>
		</tr>
		<tr>
			<td>8</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-for-3day">2GB</a></td>
			<td>3 Days</td>
			<td>57</td>
			<td>57</td>
			<td>*123*057#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-for-3day">RBD220009A</a></td>
		</tr>
		<tr>
			<td>9</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-for-7day">2GB</a></td>
			<td>7 Days</td>
			<td>101</td>
			<td>101</td>
			<td>*123*101#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-for-7day">RBD220009B</a></td>
		</tr>
		<tr>
			<td>10</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/3-gb-for-3-days">3GB</a></td>
			<td>3 Days</td>
			<td>63</td>
			<td>63</td>
			<td>*123*063#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/3-gb-for-3-days">RBD220011A</a></td>
		</tr>
		<tr>
			<td>11</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/229-tk-pack">3GB</a></td>
			<td>30 Days</td>
			<td>229</td>
			<td>229</td>
			<td>*123*229#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/229-tk-pack">RBD220011D</a></td>
		</tr>
		<tr>
			<td>12</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-3-days">5GB</a></td>
			<td>3 Days</td>
			<td>68</td>
			<td>68</td>
			<td>*123*068#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-3-days">RBD220012A</a></td>
		</tr>
		<tr>
			<td>13</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-7-days">5GB</a></td>
			<td>7 Days</td>
			<td>114</td>
			<td>114</td>
			<td>*123*114#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-7-days">RBD220012B</a></td>
		</tr>
		<tr>
			<td>14</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-30day">5GB</a></td>
			<td>30 Days</td>
			<td>249</td>
			<td>249</td>
			<td>*123*249#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/5-gb-for-30day">RBD220012D</a></td>
		</tr>
		<tr>
			<td>15</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/6-gb-for-3-days">6GB</a></td>
			<td>3 Days</td>
			<td>76</td>
			<td>76</td>
			<td>*123*076#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/6-gb-for-3-days">RBD220014A</a></td>
		</tr>
		<tr>
			<td>16</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/8-gb-internet-for-3-days">8GB</a></td>
			<td>3 Days</td>
			<td>89</td>
			<td>89</td>
			<td>*123*089#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/8-gb-internet-for-3-days">RBD220015A</a></td>
		</tr>
		<tr>
			<td>17</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/15-gb-for-7-days">15GB</a></td>
			<td>7 Days</td>
			<td>129</td>
			<td>129</td>
			<td>*123*129#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/15-gb-for-7-days">RBD221014B</a></td>
		</tr>
		<tr>
			<td>18</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/20-gb-for-7-days">20GB</a></td>
			<td>7 Days</td>
			<td>147</td>
			<td>147</td>
			<td>*123*147#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/20-gb-for-7-days">RBD220041B</a></td>
		</tr>
		<tr>
			<td>19</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/20-gb-for-30-days">20GB</a></td>
			<td>30 Days</td>
			<td>344</td>
			<td>344</td>
			<td>*123*344#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/20-gb-for-30-days">RBD220041D</a></td>
		</tr>
		<tr>
			<td>20</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/30-gb-30-days">30GB</a></td>
			<td>30 Days</td>
			<td>398</td>
			<td>398</td>
			<td>*123*398#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/30-gb-30-days">RBD220038D</a></td>
		</tr>
		<tr>
			<td>21</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/45-gb-for-30-days">45GB</a></td>
			<td>30 Days</td>
			<td>429</td>
			<td>429</td>
			<td>*123*429#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/45-gb-for-30-days">RBD220044D</a></td>
		</tr>
		<tr>
			<td>22</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/50-gb-for-30-days">50GB</a></td>
			<td>30 Days</td>
			<td>497</td>
			<td>497</td>
			<td>*123*497#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/50-gb-for-30-days">RBD220045D</a></td>
		</tr>
		<tr>
			<td>23</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-20-mins-for-3-days">1GB + 20min</a></td>
			<td>3 Days</td>
			<td>36</td>
			<td>36</td>
			<td>*123*036#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/1-gb-20-mins-for-3-days">RBC220039A</a></td>
		</tr>
		<tr>
			<td>24</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb--40-min-for-3-days">2GB + 40min</a></td>
			<td>3 Days</td>
			<td>67</td>
			<td>67</td>
			<td>*123*067#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb--40-min-for-3-days">RBC220017A</a></td>
		</tr>
		<tr>
			<td>25</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-40-min-for-7-days">2GB + 40min</a></td>
			<td>7 Days</td>
			<td>98</td>
			<td>98</td>
			<td>*123*098#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb-40-min-for-7-days">RBC220017B</a></td>
		</tr>
		<tr>
			<td>26</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb--150-min-for-30-days">2GB + 150Min</a></td>
			<td>30 Days</td>
			<td>158</td>
			<td>158</td>
			<td>*123*158#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/2-gb--150-min-for-30-days">RBC220026D</a></td>
		</tr>
		<tr>
			<td>27</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/3-gb--150-min-for-7-days">3GB + 150Min</a></td>
			<td>7 Days</td>
			<td>128</td>
			<td>128</td>
			<td>*123*128#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/3-gb--150-min-for-7-days">RBC220020B</a></td>
		</tr>
		<tr>
			<td>28</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/4-gb--200-mins-for-30-days">4GB + 200Min</a></td>
			<td>30 Days</td>
			<td>198</td>
			<td>198</td>
			<td>*123*198#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/4-gb--200-mins-for-30-days">RBC220042D</a></td>
		</tr>
		<tr>
			<td>29</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/4-gb--475-min-for-30-days">4GB + 475min</a></td>
			<td>30 Days</td>
			<td>298</td>
			<td>298</td>
			<td>*123*298#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/4-gb--475-min-for-30-days">RBC220042D</a></td>
		</tr>
		<tr>
			<td>30</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/7-gb--300-min-for-30-days">7GB + 300Min</a></td>
			<td>30 Days</td>
			<td>299</td>
			<td>299</td>
			<td>*123*299#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/7-gb--300-min-for-30-days">RBC220046D</a></td>
		</tr>
		<tr>
			<td>31</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/10-gb-400-mins-30-days">10GB + 400Min</a></td>
			<td>30 Days</td>
			<td>348</td>
			<td>348</td>
			<td>*123*348#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/10-gb-400-mins-30-days">RBC220047D</a></td>
		</tr>
		<tr>
			<td>32</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/25-gb--700-mins-for-30-days">25GB + 700Min</a></td>
			<td>30 Days</td>
			<td>498</td>
			<td>498</td>
			<td>*123*498#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/25-gb--700-mins-for-30-days">RBC220048D</a></td>
		</tr>
		<tr>
			<td>33</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/28-gb--750-min-for-30-days">28GB + 750min</a></td>
			<td>30 Days</td>
			<td>548</td>
			<td>548</td>
			<td>*123*548#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/28-gb--750-min-for-30-days">RBC220049D</a></td>
		</tr>
		<tr>
			<td>34</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/40-gb-900-mins-30-days">40GB + 900Min</a></td>
			<td>30 Days</td>
			<td>598</td>
			<td>598</td>
			<td>*123*598#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/40-gb-900-mins-30-days">RBC220050D</a></td>
		</tr>
		<tr>
			<td>35</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/50-gb--1000-min-for-30-days">50GB + 1000Min</a></td>
			<td>30 Days</td>
			<td>648</td>
			<td>648</td>
			<td>*123*648#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/50-gb--1000-min-for-30-days">RBC220051D</a></td>
		</tr>
		<tr>
			<td>36</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/60-gb--1200-min-for-30-days">60GB + 1200Min</a></td>
			<td>30 Days</td>
			<td>799</td>
			<td>799</td>
			<td>*123*799#</td>
			<td><a class="color" href="https://www.bd.airtel.com/en/personal/internet/internet-packages/60-gb--1200-min-for-30-days">RBC220030D</a></td>
		</tr>
    {{-- ============= --}}
		<tr>
			<td>৩৭</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-min-for-3-days">৪ জিবি + ৪৭৫ মিনিট</a></td>
			<td>৩ দিন</td>
			<td>২৯৩</td>
			<td>২৯৩</td>
			<td>*১২৩*২৯৩#</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-min-for-3-days">RBC220034A</a></td>
		</tr>
		<tr>
			<td>৩৮</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-minutes-for-7-days">৪ জিবি + ৪৭৫ মিনিট</a></td>
			<td>৭ দিন</td>
			<td>২৯৫</td>
			<td>২৯৫</td>
			<td>*১২৩*২৯৫#</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-minutes-for-7-days">RBC220034B</a></td>
		</tr>
    <tr>
			<td>39</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-min-for-15-days">৪ জিবি + ৪৭৫ মিনিট</a></td>
			<td>১৫ দিন</td>
			<td>২৯৭ </td>
			<td>২৯৭ </td>
			<td>*১২৩*২৯৭#</td>
			<td><a class="color" href="https://www.bd.airtel.com/bn/personal/internet/internet-packages/4-gb--475-min-for-15-days">RBC220034C</a></td>
		</tr>


	</tbody>
</table>

<h2>Terms &amp; Conditions</h2>

<ul>
	<li>Unused data volume will be carried forward if the customer purchases the same volume offer (of any validity) within the active validity period.</li>
	<li>This offer is valid for Prepaid &amp; Postpaid Customer.</li>
	<li>Data volume can be used in 2G/3G/4G network.</li>
	<li>To check internet balance dial *3#</li>
	<li>Min &amp; SMS check : *778*0#</li>
	<li>After completion of pack volume or validity, you will be charged at Pay-As-You-Go rate.</li>
	<li>Price is including govt levy.</li>
</ul>















