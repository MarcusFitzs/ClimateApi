<?php
# @Date:   2019-12-02T14:15:29+00:00
# @Last modified time: 2020-02-26T20:27:16+00:00




use Illuminate\Database\Seeder;
use App\Article;

class ArticlesTableSeeder extends Seeder
{

     //Run the database seeds.

    public function run()
    {

        DB::table('articles')->insert([
          [
            'name' => 'First Article',
            'author_id' => '1',
            'title' => 'What Would It Take to Get More Farmers Fighting Climate Change?',
            'description' => 'A new bill sponsored by Rep. Chellie Pingree would would enlist growers to help slow global warming by using their soil to sponge up carbon dioxide. ',
            'detailedDesc' => 'As signs of a new drought loom over California farm country and a potential return of last spring’s catastrophic floods haunts the Midwestern corn belt, Rep. Chellie Pingree (D-Maine) is out with a new plan to ready US agriculture for the insults of climate change. Called the Agriculture Resilience Act, the bill would enlist growers to help slow global warming by using their soil to sponge up carbon dioxide.

Agriculture is responsible for nearly 10 percent of our country’s carbon emissions. Pingree’s plan would establish a “national goal” of net zero greenhouse emissions from agriculture by no later than 2040. To do that, farmers employ several practices—including planting cover crops and reducing fertilizer use—that fall under the umbrella of what’s known as “regenerative farming” or “carbon farming.” The Ag Resilience Act seeks to restore at least half of soil carbon lost to farming this way. It would also quadruple the total federal funding for food and agriculture research; tweak management on 100 percent of grazing land to maximize carbon capture; and reduce food waste by 75 percent, among other aims.

“I wanted [the bill] to suggest a partnership between agriculture and the environment, particularly looking at the ability of soil to sequester carbon,” Pingree told me. “What would it take to support farmers in that? What are good practices we could be supporting, but what else could be doing: more research, technical assistance to farmers, assistance with renewable energy.”

Pingree’s bill directly takes on a challenge plaguing Midwestern farmland: Farmers leave huge swaths of corn and soybean territory uncovered all winter and most of the spring, leaving its soil vulnerable to massive erosion events when storms hit in the off-season. Eroded soils not only trap less carbon, they also leave crops more vulnerable to the increasing floods and droughts brought by climate change. The Pingree bill calls for farms to “maintain year-round cover on at least 75 percent of cropland acres.” When last year’s bomb cyclone storms lashed Iowa last year, only around 3.9 percent of the state’s acres were buffered from erosion by off-season cover crops.

Pingree envisioned the bill as “a fairly comprehensive response to the relationship between agriculture and climate change,” she told me. Farmers often clash with environmentalists; powerful lobby groups like the American Farm Bureau Federation have opposed many regulations on agriculture, including those related to climate change. Pingree’s bill would instead enlist them in the effort to prepare their land for shifting conditions.

In order to qualify for crop insurance subsidies, farms will have to present a “soil health plan” to the US Department of Agriculture showing they’re taking steps to reduce erosion and capture carbon in their soil. According to Ferd Hoefner, senior strategic advisor for the National Sustainable Agriculture Coalition, which aided Pingree’s office in drafting the bill, that stipulation could go a long way to inspiring farmers to plant more cover crops, a key booster of soil health.

It’s the “most comprehensive agriculture and climate bill yet introduced,” Hoefner said. While it has no chance of passing the current divided Congress and a climate-skeptic president, it sets the table for 2021, if the Democrats do well in this year’s election. “It’s conceivable that we could be looking at comprehensive climate legislation in the next Congress,” he said. “We want to make sure agriculture doesn’t get left out if that happens.” ',
            'url' => 'Fhttps://www.motherjones.com/food/2020/02/what-would-it-take-for-more-farmers-to-fight-climate-change/',
            'urlToImage' => 'https://www.motherjones.com/wp-content/uploads/2020/02/GettyImages-1187394742.jpg',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Second Article',
            'author_id' => '1',
            'title' => '‘Doomsday vault’ adds 60,000 extra food seeds over climate change fears',
            'description' => 'A DOOMSDAY VAULT borrowed deep in Arctic ice received 60,000 new seed samples yesterday amid mounting fears of a climate change apocalypse.',
            'detailedDesc' => 'Growing concern about man-made climate change and species loss is forcing institutions around the world to add their seeds to the collection dubbed a “modern-day Noah’s Ark". The reserve is nestled inside a mountain near Longyearbyen on Spitsbergen Island in Norway’s Svalbard archipelago, approximately 800 miles (1,300km) from the North Pole.

The collection of food crops was readied to preserve plants capable of feeding a growing population facing climate change.

Stefan Schmitz, who manages the reserve as head of the Crop Trust, said: “As the pace of climate change and biodiversity loss increases, there is new urgency surrounding efforts to save food crops at risk of extinction.

“The large scope of today’s seed deposit reflects worldwide concern about the impacts of climate change and biodiversity loss on food production.”

The head of the genetic bank of the Nordic nations, Lise Lykke Steffensen, said every single seed in the vault “holds potential solutions for sustainable agriculture”.

He said: “Solutions that are vital for feeding a growing population and achieving a green transition,” she added.

36 regional and international institutions have contributed to the 60,000 new food samples deposited yesterday.

The new arrivals include staple crops such as wheat and rice and wild varieties of European apple trees.

Also among the seeds are beans, squash and corn from the Cherokee Nation - the first Native American group to send crops to the vault - including their sacred White Eagle corn.

Britain’s Prince Charles, famed for his environmental advocacy, sent the seeds of 27 wild plants, including cowslips and orchids collected from the meadows of his country home Highgrove.

The Prince of Wales said in a statement: “It has proved to be an exhausting and often demoralising task to persuade people of the utterly essential role played by all this diversity in maintaining vibrant, healthy ecosystems that sustain both people and our planet.

“It’s more urgent than ever that we act now to protect this diversity before it really is too late,” he added.

The latest shipment will bring the number of seed varieties, stored in three underground alcoves at an optimum minus 18 C (-0.4 degrees F), to 1.05 million.

The seed bank has the capacity to hold up to 4.5 million samples.

Around two or three million samples “would be a good idea to make the future of the food of mankind even more secure,” Schmitz told AFP in the freezing cold of Longyearbyen.

The seed store was launched in 2008 with financing from Norway with the aim of safeguarding biodiversity in the face of climate change, world war 3 and other disasters, earning it the dramatic sobriquet “the Doomsday Vault”.

The reserve’s usefulness was highlighted during Syria’s civil war when researchers were able to retrieve from the vault duplicates of grains lost in the destruction of Aleppo in 2015.

The countries and institutions depositing seeds in the vault retain ownership over them and can retrieve them when necessary.

More than 5,000 species of plants are now stored in the Arctic Archipelago, a frozen landscape where almost nothing grows.

The vault has itself been affected by climate change.

In 2016, water seeped into its tunnel entrance when the permafrost that encases it began to melt as Arctic temperatures climbed unusually high.',
            'url' => 'https://www.express.co.uk/news/science/1247788/apocalypse-news-arctic-doomsday-vault-noahs-ark-stocks-60000-food-seeds-climate-change',
            'urlToImage' => 'https://cdn.images.express.co.uk/img/dynamic/151/590x/arctic-doomsday-vault-1247788.webp?r=1582737949593',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Third Article',
            'author_id' => '1',
            'title' => 'BP quits US lobby groups over climate change differences',
            'description' => 'The announcement comes two weeks after the company vowed to "reinvent" itself with a target of becoming carbon net zero by 2050.',
            'detailedDesc' => 'Oil giant BP is to quit three US-based energy lobby groups over differences on climate change policy.

The announcement comes two weeks after the companys new boss vowed to "reinvent" the company with a goal of becoming carbon net zero by 2050.

That included a review of its membership of various trade associations around the world, which lobby governments on policy.

BP-branded gifts are displayed at an event with BP&#39;s new Chief Executive Bernard Looney in central London, Britain February 12, 2020

I get it on climate change, says BP chief
With that review now complete, BP said it would quit the American Fuel & Petrochemical Manufacturers (AFPM) organisation, the main US refining lobby.

That follows the withdrawals of rivals Royal Dutch Shell and Total from AFPM last year.

BP will also not renew its memberships of the Western States Petroleum Association (WSPA) and Western Energy Alliance.

The company said it had found "misalignments that could not be reconciled" with the three groups.

More from Business
2,000 jobs to go as Virgin Money, Lloyds and Direct Line all slash roles
Coronavirus crisis: Markets volatile again as COVID-19 spreads in Europe
Virus turbulence could give airlines cover to make cuts
Coronavirus: What you should do if youre heading abroad on holiday
Coronavirus: Warning of wedding dress shortage in UK as China shuts factories
New chancellor must recognise need to raise taxes, says IFS
It said there were five other organisations "with which it is only partially aligned on climate" and that it had "communicated these differences to these associations".

BP chief executive Bernard Looney said: "BP will pursue opportunities to work with organisations who share our ambitious and progressive approach to the energy transition.

"And when differences arise we will be transparent.

"But if our views cannot be reconciled, we will be prepared to part company."

Can BPs goal be achieved?

Bernard Looneys strategy includes a shake-up of the way the company has been run for more than 100 years.

Oil and gas companies have come under intense pressure from investors and climate activists to fall in line with the 2015 Paris goal of limiting global warming to below 2C from pre-industrial levels.

In response, BP, Shell and other big refiners have been investing in cleaner fuel technologies.

But the AFPM - which has 300 US and international members including Exxon Mobil and Chevron - has opposed tightening some standards, saying this would hurt smaller refiners.

BP operates three refineries in the US.

The companys recent pledge on climate change sees it becoming the first of the so-called oil "supermajors" to concede that its oil and gas production will fall as a result of its changing focus.

Its move has been met with scepticism by environmental activists, who have targeted it in a series of protests.

However the Church Commissioners - the investment arm of the Church of England - has welcomed BPs initiative.',
            'url' => 'https://news.sky.com/story/bp-quits-us-lobby-groups-over-climate-change-differences-11943707',
            'urlToImage' => 'https://e3.365dm.com/19/11/1600x900/skynews-bp-oil_4841547.jpg?bypass-service-worker&20191120102143',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Fourth Article',
            'author_id' => '1',
            'title' => 'SPECIAL REPORT: Climate change activists suffering from eco-anxiety',
            'description' => 'AT a time when it seems half the world is burning and the other half is sinking it can all feel a little too much.',
            'detailedDesc' => 'AT a time when it seems half the world is burning and the other half is sinking it can all feel a little too much.

Since the Intergovernmental Panel on Climate Change released a report on the impacts of global warming of 1.5 degrees, people have begun to panic.

The UN body explained limiting global warming to that level rather than 2C would require huge changes in society around the globe.

It warns extreme events such as catastrophic flooding and wildfires will become unavoidable and ever more regular if drastic action is not taken immediately.

With Greta Thunberg becoming the face of school climate change protests, 7.6 million people marched through the streets of cities in 185 countries last year.

But despite the growing movement for change, those passionate about making a difference can feel like they’re drowning. Eco-anxiety is a term used to describe the a feeling of being overwhelmed by the existential challenge of climate change.

Although not included as a specific condition in the manual of mental health disorders, it was defined in 2017 by the American Psychological Association as "a chronic fear of environmental doom".

It is something Tristan Strange, a member of Swindon Extinction Rebellion, has experienced.

He said: “Anyone that understands the science and hasn’t felt anxious is made of sterner stuff than me.

“I’m terrified of where we may be heading. I worry that those that don’t feel anxious haven’t had the risks we’re taking communicated to them yet.”

Social media and news headlines are filled with extreme weather events and reports about the bleak consequences of climate change.

The UNs Food and Agriculture Organisation revealed this week 6.5 million people in South Sudan could be going hungry this year after a series of floods.

Around 20,000 people will suffer from extreme hunger in Akobo, Duk and Ayod in particular from February to April and need humanitarian support.

Closer to home, the UK has been hit by floods linked to global warming.

Michelle Buckingham of the Royal Wootton Bassett Environmental Group said: “I have definitely felt anxious and hopeless, it got really bad with seeing everything in the news like the Australian bushfires and no-one’s listening to you about how bad it is.

“There’s lots of smaller things people get anxiety over and important things like this people do feel anxious and are wanting to do right by the environment, which is a challenge.

“I think about what I can do for my family and my area which is helpful and people should focus on these smaller things first before taking on the bigger things.”

But whether people are taking big or small steps to change their ways, the loud voices telling them they are doomed regardless is almost impossible to ignore.

Michelle said: “Everyone should have the right to protest.

"It’s an easy way to get your voice heard but I do think some protesters get it wrong, like shouting things at people, and that can cause damage in the long run.

“There’s a place for protesters that help and I don’t think people should be silent about what they feel passionate about.”

Over the last few years the number of climate groups has grown massively.

Across the globe Extinction Rebellion was born alongside People’s Climate March, Climate Action Network, The Climate Coalition and many more.

Julian Jones of CAN is all for protesters having their voice heard.

He said: “People are raising awareness but the trouble is if a portion of animals is heading towards a catastrophic future they can either carry on and do something about it or ignore it .

It’s a bit of a need to do rather than just carrying on and facing worst problems later.

“It’s perfectly reasonable to raise awareness around it when people are doing something about it.

Then we can reduce the number of protests and marches.”

What are people doing for the environment?

THE climate crisis has stirred people across the world to do their bit when it comes to protecting the environment.

People living in Swindon and nearby have taken part in protests and global strikes but are also involved in other initiatives.

Julian Jones is a member of the Climate Action Group in Swindon. The group educates people on what they can do to help.

Julian of Old Town said: “We put on a thing called Green Drinks which happens every month.

It’s a chance for people who are interested in the environment to talk about it positively and help to do something.”

Michelle Buckingham is a member of the Royal Wootton Bassett Environmental Group and is making a difference at her home.

She grows her own fruit and vegetables, owns chickens and lives sustainably whenever she can.

Not only that, she recentlystarted a business called Pass the Party where she lets organisers of childrens parties borrow a box filled with reusable plates, bowls and cutlery for free.

She said: “The more you do things the more natural it becomes. We can only try to do out but for our community.

“The idea came from seeing all the waste created at birthday parties and another woman in Bristol started this and I saw a video and decided to do it for my town.”

To book the box visit the Pass the Party - RWB Facebook page.

Groups in and around Swindon

CLIMATE activists are growing in number across Swindon and towns nearby.

Many groups have been formed in the last few years to help tackle the climate crisis.

Swindon Climate Action Network is just one non-profit organisation fighting for the environment.

A spokesperson for the group said: “It is an independent group of people from across Swindon who are concerned about climate change and want to do something about it.”

Members of the group meet up multiple times a month and take part in annual events like Eco Fest and Apple Day.

Extinction Rebellion Swindon is a group working to prevent mass extinction, which it says is being caused by global warming.

Its next event will be on Saturday and is called Clean up our Dirty Banks.

The group is joining together at 11.30am and will descend on banks like Barclays as part of nationwide action against dirty fuel investment.

In other areas, it has seen protesters dress as cleaners before sweeping the floors of Barclays branches.

The Royal Wootton Bassett Environmental Group was only started last year.

Members work together and with the people living in the town to help live sustainably.

It holds monthly meetings to talk about environmental news and activities that are going on.

On Friday the group will be going along to the Bristol Youth Strike, where Greta Thunberg will be visiting. It will be kicking off at 11am at College Green.',
            'url' => 'https://www.swindonadvertiser.co.uk/news/18261674.special-report-climate-change-activists-suffering-eco-anxiety/',
            'urlToImage' => 'https://www.swindonadvertiser.co.uk/resources/images/10519983?type=responsive-gallery-fullscreen',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Fifth Article',
            'author_id' => '1',
            'title' => 'Climate change: Schools failing us, say pupils',
            'description' => '"Its educated people who are causing the most damage to the planet," says sixth-former Joe Brindle.',
            'detailedDesc' => 'Joe, 17, says schools need to put the environment at the heart of education.

Ministers agree "it is vital that pupils are taught about climate change" but Joe says schools are failing to prepare them for a climate emergency.

He is a founder member of Teach the Future which next week takes its call for an environmental overhaul of education to Parliament.

Its people with degrees from Oxford and Cambridge who are becoming fossil-fuel chief executives and they are the ones who are causing the most destruction to our world," says Joe.

And therefore that kind of shows that education is not succeeding and that our education is broken because education should be creating better people not worse."

On Wednesday, Joe, a pupil at Devizes School, and more than a dozen other under-18s who make up the core of Teach the Future, will take over Parliaments Terrace Pavilion to host a crowdfunded reception for MPs.

The group, run jointly by the UK Student Climate Network, best known for the school climate strikes, and the National Union of Students climate charity offshoot, SOS-UK, is launching a draft English emergency education bill which embodies their key demands and which Joe believes "is going to be really big".

What school strikers can learn from protest veterans
Thousands join UK climate protests
Climate change: Thousands invited to join citizens assembly
Pupils protest over climate change
Teach the Future is hoping the draft could at some stage form the basis of a private members bill but for now, the aim is "to get MPs on our side".

The idea is based on the 1958 US National Defense Education Act which aimed to kickstart engineering, maths and science education and give America the edge in the space and arms races.

It paid off - by July 1969, the average age in Apollo mission control was just 28.

"I think it really shows that education can be used to solve a difficult problem, if the focus is down from the government," says Joe, who will sit A-levels in history, biology and chemistry this summer.

Image copyrightTRW/PHOTOQUEST/GETTY IMAGES
Image caption
Most mission control staff on Nasas Apollo programme were in their 20s
But rather than focusing exclusively on science, technology, engineering and maths - the range of the climate emergency education act needs to be far wider, he believes.

"The space race was just one thing but the climate crisis affects every single part of everything and it requires solutions from every single part of society, whether it be arts, whether it be maths, whether it be sciences."

He wants everyone to understand the impact of their behaviour on the environment and "try to do things in a way that has as little negative impact as you can".

And while engineers have an important role, fundamentally, education needs to become more sustainable, he says.

People need to understand how the climate crisis happened, he argues: Its a symptom of a general unsustainable system."

Image copyrightJOE BRINDLE
Image caption
Joe speaking at the NUS Sustainability Summit in November 2019
Joe believes most people his age "want to understand more about climate change and whats behind it, the issues of justice... and the politics behind it".

But he says that while schools are largely sympathetic, they are constrained by limited budgets and the demands of a high-stakes exam system - and often teachers themselves lack detailed knowledge about climate change.

"Its not good enough that sustainability is restricted to a few subjects and most of our teachers and lecturers dont know enough about it," say the campaigners.

They also point out that including climate change in the national curriculum will only affect local authority schools - not academies, free schools or the private sector.

The group has invited dozens of MPs to the reception and are "particularly hoping government ministers and people close to the government will be there".

Zero-carbon schools
Teach the Futures wish-list also includes having climate science and sustainability included in teacher training and all education buildings to have a net-zero carbon footprint by 2030.

The group was founded in autumn 2019 but already has support from leading education unions and environmental organisations. It is hoping that several dozen MPs will attend the reception.

In a statement, the government said: "It is vital that pupils are taught about climate change, which is why topics are included across the national curriculum for both primary and secondary schools. Teachers have the freedom to expand on these areas if they wish.

"This government is a world leader in tackling climate change and we are the first major economy to legislate for net-zero emissions by 2050. The Department for Education provides funding to support schools to become more sustainable institutions."

A spokesperson said topics related to climate change and sustainability were included in the national curriculum for science and geography, a new environmental science A-level was introduced in 2017 and sustainability will be included in some new T-level technical qualifications, for example, construction students will learn about renewable energy and energy-efficiency technologies.

The Department for Education also supports energy efficiency through its capital funding programmes, including interest-free loans, the spokesperson added.',
            'url' => 'https://www.bbc.com/news/education-51492942',
            'urlToImage' => 'https://ichef.bbci.co.uk/news/660/cpsprodpb/3A63/production/_110974941_teachthefuture.jpg',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Sixth Article',
            'author_id' => '1',
            'title' => 'Climate change event at Seacourt Hall, West Way',
            'description' => 'A FESTIVAL to help people go green and tackle climate change is set to take place in Oxford.',
            'detailedDesc' => 'The Leap into Action! event is being held at and around the Seacourt Hall in Botley from 11am to 4pm on Saturday, February 29.

There will be a range of eco-friendly activities including a bring and take stall to help people find new homes for unwanted clothes, toys, books and DVDs, as well as a plant swap.

A ‘Dr Bike’ clinic will also be on offer where people can get their bikes checked out and tuned up for free. For children there will be face painting and play activities with a green theme.

ALSO READ: Climate activist Greta Thunberg visits Oxford

Performers will include the Oxford Taiko group with Japanese Drumming and the Cry Havoc! morris dance team.

Alongside all this there will be ideas from Oxford’s environmental groups, talks on how to save energy, and a chance to question Vale District councillors on what they are doing about climate change.

The day is being run by North Hinksey Parish Council. At 3pm it will host a ‘community climate commitment’ meeting.

Chris Church, chairman of the parish councils environment committee, said: “We want to help people play their part in tackling the climate crisis, and we want to make that interesting and enjoyable.

"Leap into Action will be a day for everyone who wants to make a difference, and for anyone who wants to see a cleaner and greener future.”',
            'url' => 'https://www.oxfordmail.co.uk/news/18260729.climate-change-event-seacourt-hall-west-way/',
            'urlToImage' => 'https://www.oxfordmail.co.uk/resources/images/11073444.jpg?display=1&htype=0&type=responsive-gallery',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Seventh Article',
            'author_id' => '1',
            'title' => 'Climate change cause of Greater Jakarta floods, BMKG says',
            'description' => 'Climate change-driven global warming is a factor behind repeated instances of severe flooding across Greater Jakarta since early January',
            'detailedDesc' => 'Climate change-driven global warming is a factor behind repeated instances of severe flooding across Greater Jakarta since early January, including a flood that inundated parts of the capital on Tuesday, according to the Meteorology, Climatology and Geophysics Agency (BMKG).

BMKG head Dwikorita Karnawati said the string of floods that hit Jakarta and its satellite cities over the past two months was a result of several changes.

“In addition to the increase of rainfall intensity and the continuation of extreme conditions, it turns out that the temperature of Indonesia has also significantly increased,” Dwikorita said.

Dwikorita said the BMKG recorded higher average temperatures in most Indonesian provinces last year compared to the average temperatures recorded in the same regions between 1981 and 2010.

The highest was recorded in Banten and Riau Islands between January and October 2019, with each province seeing an average temperature increase that was more than 1 degree Celsius higher than the temperatures recorded in the provinces between 1981 and 2010, according to BMKG data.

In Jakarta, the average temperature last year was 0.82 degrees Celsius higher than the average temperature between 1981 and 2010.

BMKG head of climate and air quality information Siswanto said that, between 1866 and 2010, the annual temperature rise in Jakarta was 1.4 times higher compared to the global trend.

He said the global annual temperature had increased at an average rate of 0.86 degrees Celsius from 1866 to 2010, while in the same period, “Jakarta’s land temperature increased at an average rate of 1.6 degree Celsius”.

Dwikorita said Indonesia needed be cautious and keep watch of the rising temperature “because this is an indicator of global climate change that has a local impact”.

“From the results of the BMKG analysis, there is a significant correlation between [the temperature rise] and the concentration of greenhouse gases in Indonesia’s regions,” she said.

The BMKG head said the rising greenhouse gas emissions were caused by high concentrations of carbon dioxide, with transportation, industry and deforestation among the main drivers of the change.

“Extreme weather and climate phenomena are happening more frequently with greater intensity. Such occurrences are predicted to also happen in the future, from 2020 to 2040, if we fail to carry out mitigation measures,” she said.

Greater Jakarta was hit by floods on Tuesday morning following overnight torrential rainfall in the fourth major flood to hit Jakarta and its satellite cities since the beginning of the year.

The BMKG found that, from 7:00 a.m. on Monday until 7:00 a.m. on Tuesday, rainfall intensity reached 278 millimeters per day, enough to be categorized as extreme rain given it exceeded 150 mm per day, Dwikorita said.

At least 19,901 residents across 214 subdistricts in Greater Jakarta were displaced following the floods, according to the National Disaster Mitigation Agency.

Jakartas highest daily rainfall since 2007 came on Dec. 31, 2019 at 377 mm per day. The heavy New Year’s Eve downpour caused major floods across Greater Jakarta, Banten and parts of West Java and claimed 60 lives and displaced hundreds of thousands of people for days.',
            'url' => 'https://www.thejakartapost.com/news/2020/02/26/climate-change-behind-2020-floods-that-displaced-thousands-in-jakarta-agency-says.html',
            'urlToImage' => 'https://img.jakpost.net/c/2020/02/25/2020_02_25_87349_1582638321._large.jpg',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Eighth Article',
            'author_id' => '1',
            'title' => 'Climate change, land-use change may enhance plant species loss in the Eastern Ghats',
            'description' => 'Climate and land use/land cover change will enhance plant species loss and loss of ecosystem services in the heavily fragmented Eastern Ghats, studies have said.',
            'detailedDesc' => 'Climate and land use change are likely to alter plant species richness in the Eastern Ghats in the future, scientists have said, pressing for urgent conservation attention on the region that has lost 16 percent of forest cover in a span of 100 years.

“Conservation action and protection is mostly focused on hotspots such as the Himalayas and the Western Ghats. But we are losing species that are not included in the hotspots,” said IIT Kharagpur scientist Rajendra Mohan Panda, referring to the 1600-km stretch of rich, biodiverse forests on discontinuous hills lying parallel to the Bay of Bengal.

The Eastern Ghats are spread across Odisha, Andhra Pradesh, Karnataka and Tamil Nadu along the east coast of India. Only 3.53 percent of their total area is protected. Recently there has been a call by environmentalists to get UNESCO cultural heritage tag. While 40 percent of the Eastern Ghats is in Andhra Pradesh, Tamil Nadu and Odisha share 25 percent each, and Karnataka and Telangana share 5 percent each.

[Read more Mapping forest loss in the northern Eastern Ghats]

Panda and colleagues at the University of Hyderabad tapped into a national database, the Biodiversity Information System, to gauge the role of climate, physiography and disturbance on species richness in the Eastern Ghats in a study.

A total of 1670 species from 2274 sampling locations of 22564 records were examined using predictive modeling tools such as canonical correspondence analysis (CCA) and decision trees.

Water-energy dynamics broadly regulates plant richness in the Eastern Ghats, with average annual rainfall and temperature having a considerable impact on plants, said study lead author Panda.

“Plants need optimum supply of water and conducive temperature ranges to thrive and the disruption in this balance due to global warming can put species at risk,” said Panda of Centre for Oceans, Rivers, Atmosphere and Land Sciences at Indian Institute of Technology Kharagpur.

The study finds herb species (771 herb species followed by 451 tree species) dominating in the Eastern Ghats landscape, suggesting how climate and human actions are changing the course of plant species richness.

“The seasonal dryness and moderate to low rainfall favour their (herbs) growth. Additionally, because of the dense population and anthropogenic disturbance, the number of tree species has reduced,” said Panda

Explaining how changes in rainfall and temperature impact plant species, co-author Reshma M. Ramachandran said rainfall primarily controls the species richness, so the changes in rainfall disturb the species richness.

“Also, changing climate accelerates the spread of invasive species even in the core areas of the forests. We have witnessed many such invasives in different parts of Eastern Ghats during our field surveys,” said Ramachandran at University Centre for Earth, Ocean and Atmospheric Sciences (CEOAS), University of Hyderabad, Hyderabad. Invasive species are those that are typically not found in a particular area but are able to establish themselves and end up competing with native species.

Panda observed that the fluctuation in temperature is more likely to have a lasting influence on the species richness in the driest quarter of the year when there is a scarcity of water supply.

“A number of plant species are becoming more vulnerable to increasing temperatures and in the driest quarter, this vulnerability is high. This indicates that the rise in temperatures due to global warming is likely to affect plant richness in the future and that effect will be magnified with an increase in seasonal temperature fluctuations,” he said.

Land use and land cover changes
Based on a simulation study on the population, land use/land cover and species distribution in the Eastern Ghats, Ramachandran said changes in land use and land cover will also negatively shape the distribution and the habitat of the plants.

The researchers used a species distribution model to simulate the potential habitats of a group of endemic (28 species found in this region) and rare, endangered and threatened (RET) (22 species found in this region) plant species on the basis of IPCC AR5 scenarios developed for 2050 and 2070.

“Especially plants under conservation categories. The endemic and rare, endangered and threatened (RET) group of species are in the top list due to their special habitats. In addition to land use land cover change, the changing climate also accelerates habitat degradation. So changing land use/land cover and climate will affect the distribution of plant species in the Eastern Ghats,” Ramachandran added.

Climate change and the prevailing rate of land use/land cover change will reduce the extents of the habitats of endemic and RET species by around 60 percent and 40 percent, respectively, said Ramachandran of the 2050 projections.

The authors underscore the telling human impacts on biodiversity in the region. “The protection that is given to biodiversity in the Eastern Ghats is not sufficient,” stressed Panda.

Timber logging, dam construction, road-rail network and other developmental activities were the major drivers of forest cover change before the 1960s, according to a 2018 study, co-authored by Ramachandran. After 1960, the anthropogenic pressure on land increased due to mining, urban development, and agricultural practices.

[Read more on forest cover loss in the Eastern Ghats]

These demands resulted in deforestation and fragmentation. Ramachandran’s 2018 study estimated that about 7.92 percent of the forest area in the Eastern Ghats was converted into agriculture and up to 3.80 percent into scrub/grassland respectively from 1920 to 2015.

As recently as December 2019, over a span of few days, thousands of trees from the forests around Talabira area in Odisha’s Sambalpur region were cut down for a coal mining project. The Tamil Nadu State Action Plan on Climate Change acknowledges the negative impacts of projects that have come up in forestlands as also pressures of mining and population on the Gulf of Mannar ecosystem and Nilgiri Biosphere Reserve.

[Read more: Dark times await Odisha’s Talabira]

SK Palita of the department of biodiversity and conservation of natural resources at Koraput University, Odisha, who was not involved in the studies, said the diversity of species is slowly coming to light because of the recent research attention on the Eastern Ghats.

“For example, our group is documenting bat diversity and species in hill streams in Koraput. Documenting diversity and threats is key. But this attention must also expand to the environment ministry so that conservation action specific for the Eastern Ghats can be planned and initiated,” Palita told Mongabay-India.

“Simultaneously community awareness is needed because the tribal population in the Eastern Ghats have their own understanding of biodiversity through their system of traditional knowledge,” Palita said.

And as governments gear up to hash out a new framework for biodiversity, replacing the 2020 Aichi targets, researchers are hopeful of the Eastern Ghats mountain ecosystem garnering more attention.

“It should get good attention from ministry and researchers like other mountain ecosystems in the country as the Eastern Ghats is often ignored on account of other ecosystems. Plantation programmes must be conducted in many parts of the Eastern Ghats to equip with changing land use and climate. For plantation, local species should get more preference than easy growing outside plants. More awareness programmes must be conducted to secure biodiversity,” added Ramachandran.',
            'url' => 'https://india.mongabay.com/2020/02/climate-change-land-use-change-may-enhance-plant-species-loss-in-the-eastern-ghats/',
            'urlToImage' => 'https://imgs.mongabay.com/wp-content/uploads/sites/30/2018/05/14215308/Forests-Livestock-grazing-in-E-Ghats-forest-premises-768x512.jpg',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Nineth Article',
            'author_id' => '1',
            'title' => 'Singapore Has a S$100 Billion Plan to Survive in a Far Hotter World Than Experts Predicted',
            'description' => 'The island nation is planning for temperatures and floodwaters way higher than the Paris target suggests.',
            'detailedDesc' => 'Singapore has a reputation for planning ahead. When it comes to climate change, it’s planning for the worst.

While governments around the world are struggling to meet the goals of the Paris agreement — keeping the global temperature increase to about 1.5 degrees Celsius and the rise in sea levels to less than 0.5 meters — Singapore is devising a S$100 billion ($72 billion) plan to safeguard the city against temperatures and floodwaters several times those levels.

Analysis by the Meteorological Service Singapore’s Centre for Climate Research Singapore suggests that in a worst case scenario, floods could rise by almost 4 meters, factoring in effects like storm surges — an increase that would submerge cities from New York to Shanghai and London if repeated globally.

Prime Minister Lee Hsien Loong has called climate change a matter of “life and death,” an existential threat to the country as important as national defense. “Everything else must bend at the knee to safeguard the existence of our island nation,” Lee said in August at his National Day Rally — Singapore’s version of the State of Union address.

Singapore has reason to worry. According to the government weather service, the city has been warming twice as quickly as the world average over the past six decades, with temperatures rising about 0.25C per decade. It just had its hottest decade on record and if global carbon emissions keep rising at the current rate, daily temperatures could reach highs of 35C to 37C (95-99 Fahrenheit) by 2100.

At the heart of Singapore’s plan is a coastal adaptation study commissioned by the Building and Construction Authority in 2013 and submitted to the government last year. The BCA declined to provide details of the report, saying that the government is reviewing the findings, but the options for the government are expected to be wide and varied, from using mangrove to protect coastlines to flood-proofing subway stations and developing green “sponge” areas that can absorb floodwaters.

A Coastal and Flood Protection Fund will be set up with an initial S$5 billion, Finance Minister Heng Swee Keat said in his budget speech on Feb. 18. He said S$1 billion will be committed to research in urban solutions and sustainability, focusing on such things as renewable energy and cooling.

“If we start early and think long term, we can begin the preparation,” Heng, who is also deputy prime minister, said in a Bloomberg TV interview on Feb. 19. The fund “will allow us to take the measures that are necessary.”

A third of Singapore, including its central business district, is less than 5 meters above mean sea level. And the coastal plan could ultimately involve spending billions to encircle the country in protective polders and dykes or connecting a chain of offshore islands with barrages to create a giant reservoir, Lee had said.

“Is Singapore overreacting? No. Reality has so far overshot scientific projections of climate impacts,” said Vinod Thomas, visiting professor at the Lee Kuan Yew School of Public Policy in Singapore. “This is a necessary and perhaps a minimal insurance policy.”

The city is no stranger to pushing back the sea. Since its first reclamation project in the early 19th century, Singapore’s land area has grown by more than 25%. Drive 15 minutes east from the skyscrapers of the financial district and you’ll find a 15 kilometer (9 miles) stretch of beaches and parks where locals cycle, camp and barbecue satay and hotdogs.

It’s all man-made, part of a reclamation project in the 1960s and 70s that cost over S$600 million. Now Singapore wants to spend more than 100 times that over the next 50 to 100 years. That’s on top of hundreds of millions already spent on engineering projects to prevent flooding.

In 2008, the country opened the S$226 million Marina Barrage, which sealed off the Singapore River to create a reservoir and hold back the sea.

At its award-winning airport, workers are paving taxiways and carrying out piling work for a giant fifth terminal that would be bigger than all the other terminals combined. Designed to handle 150 million passengers a year when it’s completed around 2030, Terminal 5 is being built on higher ground, about 5.5 meters above the average sea level, and will include 10 kilometers of drainage to keep runways clear.

On the other end of the island, the city is building the world’s biggest container terminal at Tuas, where docks will be more than 5 meters above the current sea level.

The government in 2011 lifted the minimum reclamation level from 3 meters to 4 meters above sea level and has been raising the level of highways such as Nicoll Drive along the northeastern shoreline.

To fund the defense against global warming, the government expects individual ministries to pay for smaller-scale projects from their budgets. Bigger, long-term infrastructure like sea walls and land reclamation could mean selling debt or tapping state reserves, a major departure for a nation that has traditionally financed spending from tax revenue.

The idea is to make sure each generation contributes a fair share, without burdening future generations, said a spokesperson from the Ministry of Environment and Water Resources. With no hinterland to retreat to, Singapore has no choice but to invest long term to meet the impacts of climate change, the spokesperson said.

Singapore, the world’s third-richest nation by GDP per capita, can afford to pay, but poorer countries may not have such a luxury.

Like many rich countries that built their economies on fossil fuels, Singapore’s carbon footprint is big for its size. It has 0.0005% of the world’s land, but contributes around 0.11% of global emissions — bigger than some countries more than 50 times its size.

Christiana Figueres, one of the architects behind the Paris Agreement, once quipped that Singapore’s iconic Gardens by the Bay could become “Gardens beneath the Bay” if global emissions are not drastically reduced.

Singapore has pledged to reduce emissions intensity — a gauge of carbon output per unit of economic activity — by 36% between 2005 and 2030, the year it expects its emissions to peak. The government said it will update its target soon. The country generated 52.5 million tons of emissions in 2017.

Industry contributes 60% of the emissions and three-quarters of that comes from oil refining and petrochemicals, Senior Minister of State for Trade and Industry, Koh Poh Koon, told Parliament in October 2019.

Ironically, one of the most vulnerable parts of the country is Jurong Island, a flat area of largely reclaimed land just off the southwestern coast. It is one of the world’s largest oil refining and petrochemical complexes, with plants owned by Chevron Corp., Exxon Mobil Corp. and Royal Dutch Shell Plc.

It’s hard to overstate the importance of fossil fuels to Singapore’s economy. The city is home to the world’s third-largest oil trading hub, behind New York and London, and it is among the world’s top refining centers. The oil and gas sector is worth an estimated $80 billion, and Singapore gets 95% of its electricity from natural gas.

“Singapore cannot imagine a future burning oil and gas and think the rest will switch to low carbon,” said Thomas at the Lee Kuan Yew School. “If major players like Singapore do not wean themselves away from fossil fuel-based growth, climate change will accelerate and there will no longer be any growth.” He said Singapore’s goal should be zero net carbon emissions within 15 years.

One step Singapore is taking is Southeast Asia’s first carbon tax, levied at S$5 per ton on facilities that produce 25,000 tons of CO2 or more a year. The rate could rise to S$15 a ton by 2030.

Read: Indonesia Is Moving Its Capital to the Jungle as Jakarta Sinks

The government is also investing in renewable energy, and wants solar panels to be able to power about a quarter of households by 2030. Even so, that would only be 4% of total energy demand, up from 1% now.

Part of the problem is that there’s very little land for big solar farms. Instead, the government plans to install panels on the rooftops of its 10,000 public housing buildings. Power company Sembcorp Solar Singapore also aims to build one of the world’s largest floating solar farms — the size of 45 football fields — on a reservoir.

After years with few electric vehicles on the streets, the government has started to embrace the technology, with the first fleet of public buses taking to the streets this year. Heng said the government plans to phase out vehicles with internal combustion engines by 2040.',
            'url' => 'https://www.bloomberg.com/news/features/2020-02-25/singapore-has-a-100-billion-plan-for-adapting-to-climate-change',
            'urlToImage' => 'https://assets.bwbx.io/images/users/iqjWHBFdfxIU/i9rLg7bRpfyg/v1/1400x-1.jpg',
            'publishedAt' => '26-02-20'
          ],
          [
            'name' => 'Tenth Article',
            'author_id' => '1',
            'title' => 'Emperor penguins imperiled by climate change, study finds',
            'description' => 'Standing four feet tall and weighing up to 100 pounds, emperor penguins are the largest penguin species in the world. They are also incredibly vulnerable to climate change.',
            'detailedDesc' => 'A recent study published in Global Change Biology by Stephanie Jenouvrier, associate scientist and seabird ecologist at Woods Hole Oceanographic Institution, and colleagues found that if humans are able to limit Earth’s temperature increase to 1.5 or 2 degrees Celsius above pre-industrial levels, there is hope emperor penguins will survive. But with “business as usual,” the charismatic penguins made famous for their starring role in the 2005 documentary March of the Penguins are almost certainly doomed.

How climate change is affecting emperor penguins
If climate change continues at its current rate, more than 80% of emperor penguin colonies are expected to become quasi-extinct – the point at which the number of adults may be insufficient to assure persistence of the species – by 2100.

Emperor penguins are especially vulnerable to climate change because, like polar bears in the Arctic, they depend on sea ice for vital life activities like breeding, feeding, and molting. And not just any ice conditions will do for the penguins. Too little sea ice, and the penguins don’t have enough protection from predators or space for molting. But too much sea ice leaves them far from the water’s edge, so they must travel farther – and expend a lot of energy – to find food. So like Goldilocks, the penguins need things to be just right – not too much, and not too little sea ice.

Ice stability is also crucial.

“The reason it’s important to have a thick, stable platform of sea ice is that the chicks that are raised during the breeding season in winter, they have this downy plumage, but they need to acquire waterproof plumage to be able to survive at sea in the cold water,” Jenouvrier says. “So if the sea ice breaks up too early in the season, they will not have acquired this waterproof plumage, and then they will drown and die in the Antarctic water, so it will be a complete breeding failure.”

Three scenarios show potential future of emperor penguins
Jenouvrier’s team used two computer models – a National Center for Atmospheric Research global climate model and a penguin population model – to examine how emperor penguins are affected by sea ice and how sea ice changes affect their mortality and reproduction. For the study, they explored three scenarios: a “best-case” temperature rise of 1.5 degrees Celsius, a 2-degree Celsius temperature increase, and a “business as usual” scenario with a 5- to 6-degree Celsius increase.

With the best-case scenario, they found 19% of emperor penguin colonies would become quasi-extinct by 2100; with the mid-range scenario, nearly one-third of colonies would become quasi-extinct in the same timeframe. These scenarios resulted in a 31% and 44% reduction in penguins, respectively. But their paper notes, “However, population growth rates stabilize in 2060 such that the global population will be only declining at 0.07% under Paris 1.5 and 0.34% under Paris 2, thereby halting the global population decline.”

Jenouvrier says the difference between the Paris Agreement and the “business as usual” scenario is dramatic.

“I think people don’t really understand that with a ‘business as usual’ scenario, it would be another world in terms of climate. Under a ‘business as usual’ scenario, if greenhouse gases continue their current course, the carbon dioxide in the atmosphere is projected to reach 950 ppm and it’s something that’s never been experienced by humans before, and even today, the carbon dioxide in the atmosphere is well above anything we have ever experienced as humans. But today we are at [approximately] 410, and so this ‘business as usual’ scenario is really a different world.”

Picky eaters at more risk than diet ‘generalists’
While the picture is potentially bleak for emperor penguins if the world doesn’t adhere to the 2015 Paris climate agreement goals, not every penguin species will react to climate change the same way. Authors of a recent PNAS study examined how chinstrap and gentoo penguin populations in Antarctica have been affected by human-caused changes, including climate change, historic whaling, and commercial krill harvesting.

While they found chinstrap populations plummeting, gentoos – which are closely related, nest in the same places, and have similar life histories as chinstrap penguins – were actually increasing in number. “Chinstrap penguin populations across the Antarctic Peninsula region decreased by 30 to 53% between 1979 and 2010, while gentoo penguin populations increased six-fold during this same time period,” the study found.

The researchers say that one potential reason for this disparity may be a result of diet adaptation. In order to learn about what the penguins ate in the past, the researchers used an analysis technique to examine feathers from museum specimens so they could consider what the penguins were eating almost a century ago. They examined 40 specimens overall, including five from each of the two species during four different time periods: 1930s, 1960s, 1980s, 2010s.

Their study notes that 100 years ago gentoos “fed almost exclusively on low-trophic level prey, such as krill,” but they adapted to eat other creatures higher up on the food chain, such as fish and squid. However, chinstraps mainly continue to eat just one food: krill. These tiny crustaceans are an important dietary component for many Antarctic animals, but their numbers are in decline as a result of climate change and other factors. Until the mid-1900s, whaling and sealing were thought to lead to decreased competition for krill, resulting in an abundance of it. However, after the International Convention for the Regulation of Whaling was signed, whale and seal populations recovered, leading to more competition for krill. Commercial krill fishing and climate change further reduced krill populations, and the food source was no longer as abundant as it had been.

While chinstrap penguins have short, thick beaks adapted to eat krill, gentoo penguins have beaks more adapted to eat a variety of food items.

The researchers note that their study illustrates how climate change and other factors can affect dietary specialists more than generalists.

The study points to the idea that as the climate changes, specialist species are likely to struggle more than generalists, says study author Michael Polito, assistant professor of oceanography and coastal sciences at Louisiana State University. “As those specialist species do poorly, it could open up the door for other species that are more flexible to really increase in numbers,” Polito says.

What can be done to protect emperor penguins?
While declining penguin populations and human-caused ecosystem fluctuations are concerning in their own right, declining species populations are also an indicator reflecting the health of Antarctica and the world as a whole.

Jenouvrier says she finds it hard to imagine a world without emperor penguins.

“I love seeing the sun rays dance on their plumage and the way they wobble on sea ice,” she says. But she says the possibility of losing the penguins is just one of many consequences of climate change. “It’s not necessarily just about emperor penguins – it’s about all the species on Earth, and it’s about our children,” Jenouvrier says.

But as Jenouvrier’s article notes, people can take action to ensure the survival of these species. “Global climate policy has the capacity to halt future projected declines of emperor penguins in ways that their intrinsic biological properties (i.e. dispersal abilities) do not,” she wrote. In other words, by working to meet the Paris Agreement climate goals, humanity can work to protect penguins and other species.',
            'url' => 'https://www.yaleclimateconnections.org/2020/02/emperor-penguins-imperiled-by-climate-change-study-finds/',
            'urlToImage' => 'https://www.yaleclimateconnections.org/pics/0220_emperor_penguin.jpg',
            'publishedAt' => '26-02-20'
          ]
        ]);
    }
}
