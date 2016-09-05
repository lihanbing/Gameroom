<?php
  session_start();
  if (isset($_SESSION['user'])) {
    header('location:index.php');
  }
 ?>
<!DOCTYPE html>
<html lang="zh-CN">
  <!-- header部分 -->
  <?php require_once 'public/layouts/header.php' ?>

  <body>
  <!-- 导航栏 -->
  <?php require_once 'public/layouts/nav.php' ?>
  <!-- 页面主体内容 -->
    <div class="container">
      <div class="content">
          <div class="starter-template">
                <!-- 这里做了修改，其他地方自由发挥 -->
            <h1>Welcome To Saboteur (矮人矿工)</h1>

            <br>
            <br>

            <div class="panel-group" id="accordion"> 
                <div class="panel panel-default"> 
                    <div class="panel-heading"> 
                        <h4 class="panel-title"> 
                            <a data-toggle="collapse" data-parent="#accordion" 
                            href="#collapseOne"> 
                            <b><big>Saboteur 1 规则 (点击查看)</big></b>
                        </a> 
                        </h4> 
                    </div> 
                    <div id="collapseOne" class="panel-collapse collapse"> 
                    <div class="panel-body"> 
                    ● 44 张坑道卡 &nbsp
                    ● 27 张特殊卡 &nbsp
                    ● 28 张金块卡 &nbsp
                    ● 11 张阵营卡 &nbsp<br>
                      <div class="panel-group" id="accordionsub1">
                        <div class="panel panel-default"> 
                          <div class="panel-heading"> 
                              <h4 class="panel-title"> 
                                  <a data-toggle="collapse" data-parent="#accordionsub1" 
                                  href="#collapseOneOne"> 
                                  <b>游戏设置 Set up</b>
                              </a> 
                              </h4> 
                          </div> 
                          <div id="collapseOneOne" class="panel-collapse collapse"> 
                          <div class="panel-body"> 
                              <p>

                              ● 试想一个5列x9行的空间，将坑道起点卡放于1-3，三张终点卡面朝下随机放置于9-1、9-3、9-5。 <br>
                              <br>
                              ● 以玩家的数目决定阵营卡中挖金人和妨碍者的数量，并将多余的矮人卡收回盒不再使用。 <br>
                                  ◆三人游戏：1个妨碍者与3个挖金人 ◆七人游戏：3个妨碍者与5个挖金人<br>
                                  ◆四人游戏：1个妨碍者与4个挖金人 ◆八人游戏：3个妨碍者与6个挖金人<br>
                                  ◆五人游戏：2个妨碍者与4个挖金人 ◆九人游戏：3个妨碍者与7个挖金人<br>
                                  ◆六人游戏：2个妨碍者与5个挖金人 ◆十人游戏：所有的矮人卡        <br>
                              <br>
                              随机发予每位玩家1张阵营，牌面朝下，不得让其他玩家得知身分。 <br>
                              多出来的那张阵营卡要面朝下的放到一旁直到该次游戏结束。 <br>
                              <br>
                              ● 依游戏人数发予每位玩家手牌。 <br>
                                 3-5名玩家：6张<br>
                                 6-7名玩家：5张<br>
                                 8-10名玩家：4张<br>
                              <br>
                              ● 选择年龄最小的玩家做为起始玩家。 <br>
                              </p>
                          </div> 
                          </div> 
                        </div> 
                      </div> 
                      <div class="panel-group" id="accordionsub2">
                        <div class="panel panel-default"> 
                          <div class="panel-heading"> 
                              <h4 class="panel-title"> 
                                  <a data-toggle="collapse" data-parent="#accordionsub2" 
                                  href="#collapseOneTwo"> 
                                  <b>游戏流程 Playing the Game</b>
                              </a> 
                              </h4> 
                          </div> 
                          <div id="collapseOneTwo" class="panel-collapse collapse"> 
                          <div class="panel-body"> 
                              <p>
                              從起始玩家開始，輪到每個人的回合都可以選擇下列三個行動之一執行。<br><br>
                              <b>1.出坑道卡</b><br><br>
                              路径卡的排列方式是从起点卡开始，渐渐地向外延伸出去的。
                              新打出的路经卡只能放在桌面上已经放置的路径卡旁边。 (斜角碰触不算)
                              新打出的路径卡必须至少有一条坑道是可以连回起点的。
                              新打出的卡片中四边的通路必须都与已经放置的路径卡上的通路相连。
                              所有路径卡都必须与坑道起点卡方向一致的排列。<br>
                              <br>
                              <b>2.出行动卡</b><br><br>
                              打出行动卡时要将其面朝上的放在自己或其他玩家面前。<br>
                              <br>
                              当<a href="#" class="showTip L2">「熄灭的提灯」</a>、<a href="#" class="showTip L3">「损毁的推车」</a>、<a href="#" class="showTip L1">「断柄的丁字镐」</a>其中之一在玩家面前时，
                              该玩家自此不能在他的回合执行「1.出坑道卡」的动作。<br>

                              当然，他仍旧可以打出其他的卡片(行动卡)。<br>
                              这三种卡片可以被放在同一个玩家面前，但是每一种最多只能放一张。<br>
                              该玩家必须排除掉所有这些障碍才可以执行打出坑道卡的动作。<br>

                              <a class="showTip L5">「提灯」</a>、<a class="showTip L6">「推车」</a>、<a class="showTip L4">「丁字镐」</a>等工具卡是用来恢复其对应的障碍物的。
                              这些卡片可以用在自己或别的玩家身上，使用后，工具卡与妨碍卡一并丢到弃牌堆中。
                              当然，只有在工具卡与障碍卡的种类相符合的时候才算有效。
                              有些工具卡上同时印着两种工具的图案，这表示它可以恢复其中任一种障碍。
                              但是一张工具卡一次只能恢复一张障碍卡，即使它上头标示着两种工具。
                              注意：所有的工具卡唯有在相应的妨碍卡出现时才可打出。<br>
                              <br>
                              <a class="showTip L7">「落石卡」</a>的持有者只能自己使用它。<br>
                              使用这张卡片的玩家可以自由选择一张迷宫中除了起点和终点以外的路径卡，
                              并将其与落石卡一同丢到弃牌堆中。<br>
                              妨碍者可以用它来打断通路，而挖金人可以用它来清除死胡同并制造机会建立新路径。<br>
                              因落石卡而产生的空缺可以在往后的出牌用适当的路径卡填补。<br>
                              <br>
                              <a class="showTip L8">「地图卡」</a>也是由持有者自己使用。<br>
                              当他打出这张卡片时，他可以小心的拾起一张终点卡来观看，但不可公开。
                              然后再将其放回原本的位置，并将地图卡丢到弃牌堆中。<br>
                              <br>
                              <b>3.弃掉一张卡并略过</b><br><br>
                              如果玩家不能或不想出牌，他必须将手上的一张牌面朝下不让别人看见地放到弃牌堆中。
                              这意味着弃牌堆中会有面朝上与面朝下的牌。<br>
                              <br>
                              做完上述动作其中之一后，如果牌库尚有卡牌，则该玩家从牌库抽一张牌，并轮到下一位玩家行动。
                              如果牌堆的牌被抽完时则不必抽牌。<br>
                              </p>
                          </div> 
                          </div> 
                        </div> 
                      </div>
                      <div class="panel-group" id="accordionsub3">
                        <div class="panel panel-default"> 
                          <div class="panel-heading"> 
                              <h4 class="panel-title"> 
                                  <a data-toggle="collapse" data-parent="#accordionsub3" 
                                  href="#collapseOneThr"> 
                                  <b>游戏结束 Ending the Game</b>
                              </a> 
                              </h4> 
                          </div> 
                          <div id="collapseOneThr" class="panel-collapse collapse"> 
                          <div class="panel-body"> 
                              <p>
                              当玩家能将一张路径卡放置在终点卡旁并制造一条与起点卡间无阻碍的通道时，他将所连结的终点卡掀开。<br>
                              <br>
                              若终点卡上出现的是石块，继续进行游戏。
                              将这张终点卡放回原先的位置，并转到吻合路径的方向。<br>
                              <p style="color:red"> 注意：在罕见的状况下，这张终点卡可能无法放置得与相邻的路径卡相吻合。
                              这可算是一般规则的例外而被允许。</p><br>
                              <br>
                              游戏在以下两种情况立即结束：<br>
                              1.若翻出的终点卡上出现的是金块，游戏结束并由好人获胜。<br>
                              2.当所有玩家手牌用尽或是无牌可出，游戏结束并由坏人获胜。<br>
                              <br>
                              当好人获胜时，将路径卡连接到有宝藏的终点卡的玩家抽取金块卡牌堆，张数同等于玩家人数。<br>
                              该玩家检视并挑选其中一张，然后将剩下的金块卡以逆时针方向传给下一个好人，直到这些金块卡被分配完。<br>
                              <small>注1：因金块卡的张数同等于玩家人数，因此某些好人会获得2张金块卡。<br>
                              注2：当10人游戏时，只会发放9张金块卡。<br></small>
                              <br>
                              当坏人获胜时，依坏人依本次游戏的坏人人数得到相对应的金块数。<br>
                              ● 1名坏人：合计4块金块的金块卡。<br>
                              ● 2-3名坏人：合计3块金块的金块卡。<br>
                              ● 4名坏人：合计2块金块的金块卡。<br>
                              <br>
                              所有玩家都必须将金块卡秘密地收好。
                              接着重新游戏，由前一回合打出最后一张卡片的玩家左手边的玩家开始新的回合。<br>
                              <br>
                              游戏进行三次，由金块最多的玩家获胜。<br>
                              <br>
                              </p>
                          </div> 
                          </div> 
                        </div> 
                      </div>
                    </div>
                    </div> 
                </div> 
            </div>     

            <div class="panel-group" id="accordion2"> 
                <div class="panel panel-default"> 
                    <div class="panel-heading"> 
                        <h4 class="panel-title"> 
                            <a data-toggle="collapse" data-parent="#accordion2" 
                            href="#collapseTwo"> 
                            <b><big>Saboteur 2 规则 (点击查看)</b></big>
                            </a> 
                        </h4> 
                    </div> 
                    <div id="collapseTwo" class="panel-collapse collapse"> 
                        <div class="panel-body"> 
                        <p> 此游戏需搭配矮人矿坑进行游戏。<br>
                            ● 32 个黄金标记&nbsp
                            ● 30 张坑道卡&nbsp
                            ● 21 张特殊卡&nbsp
                            ● 15 张阵营卡<br></p>
                            <div class="panel-group" id="accordionsub4">
                            <div class="panel panel-default"> 
                              <div class="panel-heading"> 
                                  <h4 class="panel-title"> 
                                      <a data-toggle="collapse" data-parent="#accordionsub4" 
                                      href="#collapseTwoOne"> 
                                      <b>游戏设置 Set up</b>
                                  </a> 
                                  </h4> 
                              </div> 
                              <div id="collapseTwoOne" class="panel-collapse collapse"> 
                              <div class="panel-body"> 
                                  <p>
                                  ● 将基本版的阵营卡和金块卡放回盒内，这些卡片在游戏中不会使用。<br>
                                  ● 将坑道起点卡与三张终点卡如同基本版方式设置于桌面中央。 (请见矮人矿坑1规则)<br>
                                  ● 将基本版与扩充的所有坑道卡与特殊卡洗匀，然后面朝下抽10张卡移出游戏不予使用。<br>
                                  ● 无论几人游戏，将15张阵营卡洗匀后面朝下发予每名玩家1张，不得让其他玩家得知身分。<br>
                                  ● 将剩余的阵营卡面朝下至于一旁，在游戏中或许还会用到。<br>
                                  ● 无论几人游戏，发予每名玩家6张手牌。<br>
                                  ● 第一轮的游戏由年纪最小者成为起始玩家，之后两轮由上一轮最后出牌者的左手边玩家担任。
                                  </p>
                              </div> 
                              </div> 
                            </div> 
                          </div> 
                          <div class="panel-group" id="accordionsub5">
                            <div class="panel panel-default"> 
                              <div class="panel-heading"> 
                                  <h4 class="panel-title"> 
                                      <a data-toggle="collapse" data-parent="#accordionsub5" 
                                      href="#collapseTwoTwo"> 
                                      <b>游戏流程 Playing the Game</b>
                                  </a> 
                                  </h4> 
                              </div> 
                              <div id="collapseTwoTwo" class="panel-collapse collapse"> 
                              <div class="panel-body"> 
                                  <p>
                                  从起始玩家开始，轮到每个人的回合都可以选择下列四个行动之一。<br>
                                  <br>
                                  1.出1张坑道卡，然后抽1张卡<br>
                                  玩家打出一张坑道卡，其放置规则如同基本版游戏，然后从牌库抽一张卡。<br>
                                  <br>
                                  2.出1张特殊卡，然后抽1张卡<br>
                                  玩家打出一张特殊卡，然后解决卡片上的效果。<br>
                                  <br>
                                  3.弃掉2张手牌，然后弃掉自己面前的1张特殊卡，然后抽1张卡<br>
                                  这么做表示玩家不需要等抽到对应的解救卡就能移掉自己的一个负面效应，但手牌从此便少人一张。<br>
                                  <br>
                                  4.弃掉1-3张手牌，然后抽取同等于弃牌张数的卡<br>
                                  最多可以让玩家换三张手牌，在抽不到想要的牌时是个不错的选择。<br><br>

                                  <b>新坑道卡</b><br>
                                  <br>
                                  <a class="showTip Lbridge">The Bridge 桥梁 (x2)</a> ─ 这张卡有两条方向垂直但并不相交的道路。<br>
                                  使用这张卡时，至少有一条路得能连接到起点。<br><br>

                                  <a class="showTip Ldc">The Double Curve 双弯道 (x2)</a> ─ 这张卡同样有有两条并不相交的道路。<br>
                                  使用这张卡时，至少有一条路得能连接到起点。<br><br>

                                  <a class="showTip Lladder">Path with a Ladder 有梯子的道路 (x4)</a> ─ 这张卡总是和起点卡与其他梯子卡连接。 (请想像成传送门)<br>
                                  使用这张卡时，必须和坑道卡相邻，但不可和终点卡相邻。<br><br>

                                  <a class="showTip Ldoor">Path with a Door 有门的道路 (x6，蓝绿各3)</a> ─ 有门的道路在结算胜利时只能让同色的队伍通过。<br>
                                  算是只对应蓝绿两阵营的卡片，但坏矮人可利用在路径上同时盖上蓝绿两道门形成死路。 <br><br>

                                  <a class="showTip Lcrystal">Path with crystal 有水晶的道路</a> - 对道路连通没有影响。<br><br>

                                  <b>新特殊卡</b><br><br>

                                  <a class="showTip Lt">Theft 偷窃 (x4)</a> ─ 将此卡置于自己面前。在该轮结束结算分数后，
                                  你可以从任一有黄金的玩家那偷走1个黄金标记。<br>
                                  注意：不限当回拿黄金的玩家，只要面前有黄金都可以偷。另外玩家面前有陷阱卡时偷窃卡不起作用。<br><br>

                                  <a class="showTip Lho">Hands Off 打小手 (x3)</a> ─ 将任一玩家面前的偷窃卡弃掉。<br><br>

                                  <a class="showTip Lsyh">Swap Your Hand 交换手牌 (x2)</a> ─ 指定一名玩家与他交换所有手牌，然后此卡进入弃牌堆。
                                  然后被交换手牌的玩家抽1张卡。<br><br>

                                  <a class="showTip Li">Inspection 侦查 (x2)</a> ─ 指定一名玩家观看其阵营卡，然后此卡进入弃牌堆。<br><br>

                                  <a class="showTip Lsyhat">Swap Your Hats 交换帽子 (x2)</a> ─ 指定任何一名玩家(可选自己)，该玩家将阵营卡面朝下移出游戏，
                                  从阵营卡堆抽一张新的阵营卡。然后此卡进入弃牌堆。<br><br>

                                  <a class="showTip Ltrap">Trapped! 陷阱 (x3)</a> ─ 将此卡置于一名玩家面前，该玩家无法打出坑道卡。
                                  若该轮结束时该玩家仍被陷阱影响，则不计入胜利人数，也无法分得黄金。<br><br>

                                  <a class="showTip Lfree">Free at last! 解放 (x4)</a> ─ 将任一玩家面前的陷阱卡弃掉。<br><br>

                                  <b>阵营卡</b><br>

                                  <a class="showTip Lbg">Blue Gold-Digger 蓝矮人 (x4)</a> ─<br>
                                  1.任一蓝矮人挖到金矿，且沿途没有被绿门阻挡。或<br>
                                  2.任一绿矮人挖到金矿，但沿途被蓝门阻挡，反之蓝矮人没有被绿门阻挡。或<br>
                                  3.非蓝绿之一挖到金矿，且沿途没有被绿门阻挡。<br><br>

                                  <a class="showTip Lgg">Green Gold-Digger 绿矮人 (x4)</a> ─<br>
                                  1.任一绿矮人挖到金矿，且沿途没有被蓝门阻挡。或<br>
                                  2.任一蓝矮人挖到金矿，但沿途被绿门阻挡，反之绿矮人没有被蓝门阻挡。或<br>
                                  3.非蓝绿之一挖到金矿，且沿途没有被蓝门阻挡。<br><br>

                                  <a class="showTip Lsaboteur">Saboteur 坏矮人 (x3)</a> ─ 到一轮结束时宝藏没有被挖出。<br><br>

                                  <a class="showTip Lboss">The Boss 工头 (x1)</a> ─ 蓝绿任一方有算获胜便一同获胜，但计算分数时分得的黄金数会-1。<br><br>

                                  <a class="showTip Lprofiteer">The Profiteer 奸商 (x1)</a> ─ 无论如何都算获胜，但计算分数时分得的黄金数会-2。<br><br>

                                  <a class="showTip Lgeo">The Geologist 地质学者 (x2)</a> ─ 对黄金毫无兴趣的角色，不计算入胜利人数。<br>
                                  当计算分数时分得的黄金等于场上可见的水晶数，若有两人为地质学者，则分数平分(无条件舍去)。<br><br>

                                  </p>
                              </div> 
                              </div> 
                            </div> 
                          </div>
                          <div class="panel-group" id="accordionsub6">
                            <div class="panel panel-default"> 
                              <div class="panel-heading"> 
                                  <h4 class="panel-title"> 
                                      <a data-toggle="collapse" data-parent="#accordionsub6" 
                                      href="#collapseTwoThr"> 
                                      <b>游戏结束 Ending the Game</b>
                                  </a> 
                                  </h4> 
                              </div> 
                              <div id="collapseTwoThr" class="panel-collapse collapse"> 
                              <div class="panel-body"> 
                                  <p>
                                  当玩家能将一张路径卡放置在终点卡旁并制造一条与起点卡间无阻碍的通道时，他将所连结的终点卡掀开。<br>
                                  <br>
                                  若终点卡上出现的是石块，继续进行游戏。
                                  将这张终点卡放回原先的位置，并转到吻合路径的方向。<br>
                                  <p style="color:red"> 注意：在罕见的状况下，这张终点卡可能无法放置得与相邻的路径卡相吻合。
                                  这可算是一般规则的例外而被允许。</p><br>
                                  <br>
                                  游戏在以下两种情况立即结束：<br>
                                  1.若翻出的终点卡上出现的是金块<br>
                                  2.当所有玩家手牌用尽或是无牌可出<br>
                                  <br>
                                  <b>计算分数</b>
                                  <br>
                                  游戏依当轮胜利之总人数计算得分，每名​​胜利玩家获得对应分数的黄金标记。<br>
                                  <br>
                                  胜利人数 / 获得分数<br>

                                      1 / 5<br>
                                      2 / 4<br>
                                      3 / 3<br>
                                      4 / 2<br>
                                      5+ / 1<br>
                                  <br>
                                  <b>举例</b>：该轮有2蓝1绿1工头1奸商1地质学者1坏矮人，最后奸商挖到了金矿。
                                  在坑道沿途有蓝色的门，但其中一个蓝色矮人的面前有陷阱卡，而坏矮人和绿矮人的面前都有一张偷窃卡。
                                  这轮的胜利人数为1蓝+1工头+1奸商 = 3人，因此每名胜利玩家可分得3黄金。
                                  由于工头分得数量会-1，所以只得2黄金；奸商分得数量会-2，所以只得1黄金。
                                  地质学者检查场上的水晶数为2，所以得2黄金。
                                  最后坏矮人和绿矮人分别偷走其他玩家的一个黄金，但是此时坏矮人不能趁绿矮人偷完后再把他的偷过来。
                                  (因为在检查时绿矮人的黄金数量还是计算为0)
                                  <br>
                                  <br>
                                  游戏进行三轮，由金块最多的玩家获胜。如果有发生平手，则那些玩家并列第一。<br>
                                  <br>
                                  </p>
                              </div> 
                              </div> 
                            </div> 
                          </div>
                        </div> 
                    </div> 
                </div> 
            </div>

            <br>
            <p class="lead">Good Luck, Have Fun <br> May the odds be ever in your favor </p>
            
          </div>  
          <!-- 注册表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="register" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Register</h4>
              </div>
              <form action="admin/Register.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">Name:</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="username" id="username" minlength="2" maxlength="20" placeholder="username" required="">
                    </div>
                    <!-- 错误提示信息 -->
                    <h6 style="color: red;" id="dis_un"></h6>
                  </div>

<!--                   <div class="form-group">
                    <label for="email" class="col-sm-4 control-label">Email:</label>
                    <div class="col-sm-6">
                      <input type="email" class="form-control" name="email" id="remail" placeholder="Email" required="">
                    </div>
                    <h6 style="color: red;" id="dis_em"></h6>
                  </div> -->

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" id="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_pwd"></h6>
                  </div>

                  <div class="form-group">
                    <label for="confirm" class="col-sm-4 control-label">Confirm password:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="confirm" id="confirm" placeholder="confirm" minlength="6" maxlength="20" required="">
                    </div>
                    <h6 style="color: red;" id="dis_con_pwd"></h6>
                  </div>


                  <div class="form-group">
                    <label for="Icon number" class="col-sm-4 control-label">Icon:</label>
                    <select size="1" type="iconnum" class="form-control" name="iconnum" id="iconnum" onChange="showlogo(this.value)" required="" style="width:100px">
                      <option selected value="1">1</option>
                      <?php
                      for($i=2;$i<=70;$i++)
                      {
                        echo"<option value=".$i.">".$i."</option>";
                      }
                     
                      ?>                       
                    </select>&nbsp;&nbsp; <img src="public/img/enemies/icon (1).png" width="150px" height="150px" name="img">
                    <!-- <div class="col-sm-6">
                      <input type="iconnum" class="form-control" name="iconnum" id="iconnum" placeholder="iconnum (1-70)" required="">
                    </div> -->
                    <h6 style="color: red;" id="dis_in"></h6>
                  </div>
                  
                  <!-- <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> verification code :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4" size="100">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
                      <span>Click to Switch</span>
                    </div>
                  </div> -->
                  <input type="hidden" name="type" value="all">
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Close</button>
                  <input type="reset" class="btn btn-warning" value ="reset" />
                  <button type="submit" class="btn btn-primary" id="reg">register</button>
                </div>
              </form>
              </div>
            </div>
          </div>


          <!-- 登陆表单 -->
          <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" id="login" aria-labelledby="myLargeModalLabel">
            <div class="modal-dialog modal-lg">
              <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Login</h4>
              </div>
              <form action="admin/Login.php" method="post" accept-charset="utf-8" class="form-horizontal">
                <div class="modal-body">

                  <div class="form-group">
                    <label for="username" class="col-sm-4 control-label">Username:</label>
                    <div class="col-sm-6">
                      <input type="username" class="form-control" name="username" id="username" minlength="2" maxlength="20" placeholder="username" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Password:</label>
                    <div class="col-sm-6">
                      <input type="password" class="form-control" name="password" placeholder="password" minlength="6" maxlength="20" required="">
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="password" class="col-sm-4 control-label">Remember Me:</label>
                    <div class="col-sm-3">
                      <label class="checkbox-inline">
                        <input type="radio" name="rem" id="yes" value="1" checked> Yes
                      </label>
                      <label class="checkbox-inline">
                        <input type="radio" name="rem" id="optionsRadios4" value="0"> No
                      </label>
                    </div>
                  </div>

<!--                   <div class="form-group">
                    <label for="code" class="col-sm-4 control-label"> verification code :</label>
                    <div class="col-sm-6">
                      <input type="text" class="form-control" name="code" id="code" placeholder="verification code" required="" maxlength="4">
                    </div>
                  </div> -->

<!--                   <div class="form-group">
                    <div class="col-sm-12">
                      <img src="admin/Captcha.php" alt="" id="codeimg" onclick="javascript:this.src = 'admin/Captcha.php?'+Math.random();">
                <span>Click to Switch</span>
                    </div>
                  </div> -->
                  
                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal" style="float: left;">Close</button>
                  <input type="reset" class="btn btn-warning" value ="reset" />
                  <button type="submit" class="btn btn-primary" name="login">Login</button>
                </div>
              </form>
              </div>
            </div>
          </div>

      </div>

    </div><!-- /.container -->
    

    <!-- 网页底部 -->
    <?php require_once 'public/layouts/footer.php'; ?>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="//cdn.bootcss.com/jquery/1.11.3/jquery.min.js"></script>
    <script src="//cdn.bootcss.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="public/js/check.js"></script>
    <script src="public/js/dw_tooltip_c.js" type="text/javascript"></script>
    <script type="text/javascript">
    dw_Tooltip.defaultProps = {
    //supportTouch: true, // set false by default
        wrapFn: dw_Tooltip.wrapImageToWidth
    }

    // Problems, errors? See http://www.dyn-web.com/tutorials/obj_lit.php#syntax

    dw_Tooltip.content_vars = {
    L1: {
        img: 'saboteur/img/Saboteur1/27 action cards/broken tool card 1.jpg',
        w: 222, // width of image
        h: 361 // height of image

    },
    L2: {
        img: 'saboteur/img/Saboteur1/27 action cards/broken tool card 2.jpg',
        w: 222,
        h: 361
    },
    L3: {
        img: 'saboteur/img/Saboteur1/27 action cards/broken tool card 3.jpg',
        w: 222,
        h: 361
    },
    L4: {
        img: 'saboteur/img/Saboteur1/27 action cards/repair tool card 1.jpg',
        w: 222, // width of image
        h: 361 // height of image
    },
    L5: {
        img: 'saboteur/img/Saboteur1/27 action cards/repair tool card 2.jpg',
        w: 222,
        h: 361
    },
    L6: {
        img: 'saboteur/img/Saboteur1/27 action cards/repair tool card 3.jpg',
        w: 222,
        h: 361
    },
    L7: {
        img: 'saboteur/img/Saboteur1/27 action cards/rock-fall card.jpg',
        w: 222,
        h: 361
    },
    L8: {
        img: 'saboteur/img/Saboteur1/27 action cards/prophet card.jpg',
        w: 222,
        h: 361
    },
    Lbridge: {
        img: 'saboteur/img/Saboteur2/30 path cards/path card 1.jpg',
        w: 361, // width of image
        h: 222 // height of image
    },
    Ldc: {
        img: 'saboteur/img/Saboteur2/30 path cards/path card 12.jpg',
        w: 361,
        h: 222
    },
    Lladder: {
        img: 'saboteur/img/Saboteur2/30 path cards/path card 21.jpg',
        w: 361,
        h: 222
    },
    Ldoor: {
        img: 'saboteur/img/Saboteur2/30 path cards/path card door.jpg',
        w: 444, // width of image
        h: 361 // height of image
    },
    Lcrystal: {
        img: 'saboteur/img/Saboteur2/30 path cards/path card 2.jpg',
        w: 361,
        h: 222
    },
    Lt: {
        img: 'saboteur/img/Saboteur2/21 action cards/theft card.jpg',
        w: 222,
        h: 361
    },
    Lho: {
        img: 'saboteur/img/Saboteur2/21 action cards/police card.jpg',
        w: 222,
        h: 361
    },
    Lsyh: {
        img: 'saboteur/img/Saboteur2/21 action cards/exchange cards.jpg',
        w: 222,
        h: 361
    },
    Li: {
        img: 'saboteur/img/Saboteur2/21 action cards/prophet card.jpg',
        w: 222,
        h: 361
    },
    Lsyhat: {
        img: 'saboteur/img/Saboteur2/21 action cards/exchange profiles.jpg',
        w: 222,
        h: 361
    },
    Ltrap: {
        img: 'saboteur/img/Saboteur2/21 action cards/prison card.jpg',
        w: 222,
        h: 361
    },
    Lfree: {
        img: 'saboteur/img/Saboteur2/21 action cards/release card.jpg',
        w: 222,
        h: 361
    },
    Lbg: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/little blue.jpg',
        w: 222,
        h: 361
    },
    Lgg: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/little green.jpg',
        w: 222,
        h: 361
    },
    Lsaboteur: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/saboteur.jpg',
        w: 222,
        h: 361
    },
    Lboss: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/boss.jpg',
        w: 222,
        h: 361
    },
    Lprofiteer: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/profiteer.jpg',
        w: 222,
        h: 361
    },
    Lgeo: {
        img: 'saboteur/img/Saboteur2/15 dwarf cards/geologist.jpg',
        w: 222,
        h: 361
    }
    }


    </script>

    <script language="javascript"> 
         
    function showlogo(m){
      document.images.img.src = "public/img/enemies/icon (" + m + ").png";
    }
    </script>
  </body>
</html>