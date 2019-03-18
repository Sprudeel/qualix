@extends('layouts.default')

@section('content')

    <h1>Kitchen sink</h1>
    <h5 class="text-muted mb-4">Biispiel für all wichtige Bootstrap-Komponente</h5>

    <div class="row">
        <div class="col">
            <div class="alert alert-info" role="alert">
                Note: this is intended to be used as a quick overview/reference. Visit <a
                    href="https://getbootstrap.com/docs/">https://getbootstrap.com/docs/</a> for full documentation!
            </div>


            <h1>Headings</h1>
            <hr>
            <h1>h1. Bootstrap heading</h1>
            <h2>h2. Bootstrap heading</h2>
            <h3>h3. Bootstrap heading</h3>
            <h4>h4. Bootstrap heading</h4>
            <h5>h5. Bootstrap heading</h5>
            <h6>h6. Bootstrap heading</h6>
            <pre><code class="html">&lt;h1&gt;h1. Bootstrap heading&lt;/h1&gt;
&lt;h2&gt;h2. Bootstrap heading&lt;/h2&gt;
&lt;h3&gt;h3. Bootstrap heading&lt;/h3&gt;
&lt;h4&gt;h4. Bootstrap heading&lt;/h4&gt;
&lt;h5&gt;h5. Bootstrap heading&lt;/h5&gt;
&lt;h6&gt;h6. Bootstrap heading&lt;/h6&gt;</code></pre>


            <h1>Inline text elements</h1>
            <hr>
            <p>You can use the mark tag to
                <mark>highlight</mark>
                text.
            </p>
            <p>
                <del>This line of text is meant to be treated as deleted text.</del>
            </p>
            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
            <p>
                <ins>This line of text is meant to be treated as an addition to the document.</ins>
            </p>
            <p><u>This line of text will render as underlined</u></p>
            <p>
                <small>This line of text is meant to be treated as fine print.</small>
            </p>
            <p><strong>This line rendered as bold text.</strong></p>
            <p><em>This line rendered as italicized text.</em></p>
            <pre><code class="html">&lt;p&gt;You can use the mark tag to &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;
&lt;p&gt;&lt;del&gt;This line of text is meant to be treated as deleted text.&lt;/del&gt;&lt;/p&gt;
&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no longer accurate.&lt;/s&gt;&lt;/p&gt;
&lt;p&gt;&lt;ins&gt;This line of text is meant to be treated as an addition to the document.&lt;/ins&gt;&lt;/p&gt;
&lt;p&gt;&lt;u&gt;This line of text will render as underlined&lt;/u&gt;&lt;/p&gt;
&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine print.&lt;/small&gt;&lt;/p&gt;
&lt;p&gt;&lt;strong&gt;This line rendered as bold text.&lt;/strong&gt;&lt;/p&gt;
&lt;p&gt;&lt;em&gt;This line rendered as italicized text.&lt;/em&gt;&lt;/p&gt;</code></pre>


            <h1>Responsive images</h1>
            <hr>
            <img src="http://via.placeholder.com/900x200" class="img-fluid" alt="Responsive image">
            <pre><code class="html">&lt;img src=&quot;http://via.placeholder.com/900x200&quot; class=&quot;img-fluid&quot; alt=&quot;Responsive image&quot;&gt;</code></pre>


            <h1>Avatars</h1>
            <hr>
            <img src="http://via.placeholder.com/200x200" alt="..." class="avatar">
            <img src="http://via.placeholder.com/200x200" alt="..." class="avatar-small">
            <pre><code class="html">&lt;img src=&quot;http://via.placeholder.com/200x200&quot; alt=&quot;...&quot; class=&quot;avatar&quot;&gt;
&lt;img src=&quot;http://via.placeholder.com/200x200&quot; alt=&quot;...&quot; class=&quot;avatar-small&quot;&gt;</code></pre>


            <h1>Tables</h1>
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Table head options</h1>
            <hr>
            <table class="table">
                <thead class="thead-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>

            <table class="table">
                <thead class="thead-light">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table&quot;&gt;
  &lt;thead class=&quot;thead-dark&quot;&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;

&lt;table class=&quot;table&quot;&gt;
  &lt;thead class=&quot;thead-light&quot;&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Striped rows</h1>
            <hr>
            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table table-striped&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td&gt;Larry&lt;/td&gt;
      &lt;td&gt;the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Bordered table</h1>
            <hr>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table table-bordered&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Borderless table</h1>
            <hr>
            <table class="table table-borderless">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table table-borderless&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Hoverable rows</h1>
            <hr>
            <table class="table table-hover">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table table-hover&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Small table</h1>
            <hr>
            <table class="table table-sm">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table class=&quot;table table-sm&quot;&gt;
  &lt;thead&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;col&quot;&gt;#&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;First&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Last&lt;/th&gt;
      &lt;th scope=&quot;col&quot;&gt;Handle&lt;/th&gt;
    &lt;/tr&gt;
  &lt;/thead&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;1&lt;/th&gt;
      &lt;td&gt;Mark&lt;/td&gt;
      &lt;td&gt;Otto&lt;/td&gt;
      &lt;td&gt;@mdo&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;2&lt;/th&gt;
      &lt;td&gt;Jacob&lt;/td&gt;
      &lt;td&gt;Thornton&lt;/td&gt;
      &lt;td&gt;@fat&lt;/td&gt;
    &lt;/tr&gt;
    &lt;tr&gt;
      &lt;th scope=&quot;row&quot;&gt;3&lt;/th&gt;
      &lt;td colspan=&quot;2&quot;&gt;Larry the Bird&lt;/td&gt;
      &lt;td&gt;@twitter&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>


            <h1>Contextual classes</h1>
            <hr>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Class</th>
                    <th scope="col">Heading</th>
                    <th scope="col">Heading</th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-active">
                    <th scope="row">Active</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr>
                    <th scope="row">Default</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-primary">
                    <th scope="row">Primary</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-secondary">
                    <th scope="row">Secondary</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-success">
                    <th scope="row">Success</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-danger">
                    <th scope="row">Danger</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-warning">
                    <th scope="row">Warning</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-info">
                    <th scope="row">Info</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-light">
                    <th scope="row">Light</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                <tr class="table-dark">
                    <th scope="row">Dark</th>
                    <td>Cell</td>
                    <td>Cell</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;!-- On rows --&gt;
&lt;tr class=&quot;table-active&quot;&gt;...&lt;/tr&gt;

&lt;tr class=&quot;table-primary&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-secondary&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-success&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-danger&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-warning&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-info&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-light&quot;&gt;...&lt;/tr&gt;
&lt;tr class=&quot;table-dark&quot;&gt;...&lt;/tr&gt;

&lt;!-- On cells (`td` or `th`) --&gt;
&lt;tr&gt;
  &lt;td class=&quot;table-active&quot;&gt;...&lt;/td&gt;

  &lt;td class=&quot;table-primary&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-secondary&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-success&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-danger&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-warning&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-info&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-light&quot;&gt;...&lt;/td&gt;
  &lt;td class=&quot;table-dark&quot;&gt;...&lt;/td&gt;
&lt;/tr&gt;</code></pre>


            <h1>Alerts</h1>
            <hr>
            <div class="alert alert-primary" role="alert">
                A simple primary alert—check it out!
            </div>
            <div class="alert alert-secondary" role="alert">
                A simple secondary alert—check it out!
            </div>
            <div class="alert alert-success" role="alert">
                A simple success alert—check it out!
            </div>
            <div class="alert alert-danger" role="alert">
                A simple danger alert—check it out!
            </div>
            <div class="alert alert-warning" role="alert">
                A simple warning alert—check it out!
            </div>
            <div class="alert alert-info" role="alert">
                A simple info alert—check it out!
            </div>
            <div class="alert alert-light" role="alert">
                A simple light alert—check it out!
            </div>
            <div class="alert alert-dark" role="alert">
                A simple dark alert—check it out!
            </div>
            <pre><code class="html">&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
  A simple primary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
  A simple secondary alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
  A simple success alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
  A simple danger alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
  A simple warning alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
  A simple info alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
  A simple light alert—check it out!
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
  A simple dark alert—check it out!
&lt;/div&gt;</code></pre>


            <h1>Alerts > Link color</h1>
            <hr>
            <div class="alert alert-primary" role="alert">
                A simple primary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                you like.
            </div>
            <div class="alert alert-secondary" role="alert">
                A simple secondary alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                you like.
            </div>
            <div class="alert alert-success" role="alert">
                A simple success alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                you like.
            </div>
            <div class="alert alert-danger" role="alert">
                A simple danger alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                you like.
            </div>
            <div class="alert alert-warning" role="alert">
                A simple warning alert with <a href="#" class="alert-link">an example link</a>. Give it a click if
                you like.
            </div>
            <div class="alert alert-info" role="alert">
                A simple info alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                like.
            </div>
            <div class="alert alert-light" role="alert">
                A simple light alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                like.
            </div>
            <div class="alert alert-dark" role="alert">
                A simple dark alert with <a href="#" class="alert-link">an example link</a>. Give it a click if you
                like.
            </div>
            <pre><code class="html">&lt;div class=&quot;alert alert-primary&quot; role=&quot;alert&quot;&gt;
  A simple primary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-secondary&quot; role=&quot;alert&quot;&gt;
  A simple secondary alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
  A simple success alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-danger&quot; role=&quot;alert&quot;&gt;
  A simple danger alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-warning&quot; role=&quot;alert&quot;&gt;
  A simple warning alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-info&quot; role=&quot;alert&quot;&gt;
  A simple info alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-light&quot; role=&quot;alert&quot;&gt;
  A simple light alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;
&lt;div class=&quot;alert alert-dark&quot; role=&quot;alert&quot;&gt;
  A simple dark alert with &lt;a href=&quot;#&quot; class=&quot;alert-link&quot;&gt;an example link&lt;/a&gt;. Give it a click if you like.
&lt;/div&gt;</code></pre>


            <h1>Badges</h1>
            <hr>
            <span class="badge badge-primary">Primary</span>
            <span class="badge badge-secondary">Secondary</span>
            <span class="badge badge-success">Success</span>
            <span class="badge badge-danger">Danger</span>
            <span class="badge badge-warning">Warning</span>
            <span class="badge badge-info">Info</span>
            <span class="badge badge-light">Light</span>
            <span class="badge badge-dark">Dark</span>
            <pre><code class="html">&lt;span class=&quot;badge badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-light&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge badge-dark&quot;&gt;Dark&lt;/span&gt;</code></pre>


            <h1>Badges > Pills</h1>
            <hr>
            <span class="badge badge-pill badge-primary">Primary</span>
            <span class="badge badge-pill badge-secondary">Secondary</span>
            <span class="badge badge-pill badge-success">Success</span>
            <span class="badge badge-pill badge-danger">Danger</span>
            <span class="badge badge-pill badge-warning">Warning</span>
            <span class="badge badge-pill badge-info">Info</span>
            <span class="badge badge-pill badge-light">Light</span>
            <span class="badge badge-pill badge-dark">Dark</span>
            <pre><code class="html">&lt;span class=&quot;badge badge-pill badge-primary&quot;&gt;Primary&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-secondary&quot;&gt;Secondary&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-success&quot;&gt;Success&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-danger&quot;&gt;Danger&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-warning&quot;&gt;Warning&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-info&quot;&gt;Info&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-light&quot;&gt;Light&lt;/span&gt;
&lt;span class=&quot;badge badge-pill badge-dark&quot;&gt;Dark&lt;/span&gt;</code></pre>


            <h1>Badges > Links</h1>
            <hr>
            <a href="#" class="badge badge-primary">Primary</a>
            <a href="#" class="badge badge-secondary">Secondary</a>
            <a href="#" class="badge badge-success">Success</a>
            <a href="#" class="badge badge-danger">Danger</a>
            <a href="#" class="badge badge-warning">Warning</a>
            <a href="#" class="badge badge-info">Info</a>
            <a href="#" class="badge badge-light">Light</a>
            <a href="#" class="badge badge-dark">Dark</a>
            <pre><code class="html">&lt;a href=&quot;#&quot; class=&quot;badge badge-primary&quot;&gt;Primary&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-secondary&quot;&gt;Secondary&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-success&quot;&gt;Success&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-danger&quot;&gt;Danger&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-warning&quot;&gt;Warning&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-info&quot;&gt;Info&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-light&quot;&gt;Light&lt;/a&gt;
&lt;a href=&quot;#&quot; class=&quot;badge badge-dark&quot;&gt;Dark&lt;/a&gt;</code></pre>


            <h1>Badges > In Elements</h1>
            <hr>
            <h1>Example heading <span class="badge badge-secondary">New</span></h1>
            <h2>Example heading <span class="badge badge-secondary">New</span></h2>
            <h3>Example heading <span class="badge badge-secondary">New</span></h3>
            <h4>Example heading <span class="badge badge-secondary">New</span></h4>
            <h5>Example heading <span class="badge badge-secondary">New</span></h5>
            <h6>Example heading <span class="badge badge-secondary">New</span></h6>
            <pre><code class="html">&lt;h1&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h1&gt;
&lt;h2&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h2&gt;
&lt;h3&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h3&gt;
&lt;h4&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h4&gt;
&lt;h5&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h5&gt;
&lt;h6&gt;Example heading &lt;span class=&quot;badge badge-secondary&quot;&gt;New&lt;/span&gt;&lt;/h6&gt;</code></pre>


            <h1>Badges > In Buttons</h1>
            <hr>
            <button type="button" class="btn btn-primary">
                Notifications <span class="badge badge-light">4</span>
            </button>
            <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;
  Notifications &lt;span class=&quot;badge badge-light&quot;&gt;4&lt;/span&gt;
&lt;/button&gt;</code></pre>


            <h1>Buttons</h1>
            <hr>
            <button type="button" class="btn btn-primary">Primary</button>
            <button type="button" class="btn btn-secondary">Secondary</button>
            <button type="button" class="btn btn-success">Success</button>
            <button type="button" class="btn btn-danger">Danger</button>
            <button type="button" class="btn btn-warning">Warning</button>
            <button type="button" class="btn btn-info">Info</button>
            <button type="button" class="btn btn-light">Light</button>
            <button type="button" class="btn btn-dark">Dark</button>

            <button type="button" class="btn btn-link">Link</button>
            <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-light&quot;&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-dark&quot;&gt;Dark&lt;/button&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-link&quot;&gt;Link&lt;/button&gt;</code></pre>


            <h1>Buttons > Outline</h1>
            <hr>
            <button type="button" class="btn btn-outline-primary">Primary</button>
            <button type="button" class="btn btn-outline-secondary">Secondary</button>
            <button type="button" class="btn btn-outline-success">Success</button>
            <button type="button" class="btn btn-outline-danger">Danger</button>
            <button type="button" class="btn btn-outline-warning">Warning</button>
            <button type="button" class="btn btn-outline-info">Info</button>
            <button type="button" class="btn btn-outline-light">Light</button>
            <button type="button" class="btn btn-outline-dark">Dark</button>
            <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-secondary&quot;&gt;Secondary&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-success&quot;&gt;Success&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-danger&quot;&gt;Danger&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-warning&quot;&gt;Warning&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-info&quot;&gt;Info&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-light&quot;&gt;Light&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-outline-dark&quot;&gt;Dark&lt;/button&gt;</code></pre>


            <h1>Buttons > Sizes</h1>
            <hr>
            <button type="button" class="btn btn-primary btn-sm">Small button</button>
            <button type="button" class="btn btn-secondary btn-sm">Small button</button>

            <br><br>

            <button type="button" class="btn btn-primary">Normal button</button>
            <button type="button" class="btn btn-secondary">Normal button</button>

            <br><br>

            <button type="button" class="btn btn-primary btn-lg">Large button</button>
            <button type="button" class="btn btn-secondary btn-lg">Large button</button>
            <pre><code class="html">&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-sm&quot;&gt;Small button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-sm&quot;&gt;Small button&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Normal button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Normal button&lt;/button&gt;

&lt;br&gt;&lt;br&gt;

&lt;button type=&quot;button&quot; class=&quot;btn btn-primary btn-lg&quot;&gt;Large button&lt;/button&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary btn-lg&quot;&gt;Large button&lt;/button&gt;</code></pre>


            <h1>Button groups</h1>
            <hr>
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
            </div>
            <pre><code class="html">&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>


            <h1>Button groups > Vertical</h1>
            <hr>
            <div class="btn-group-vertical" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">First</button>
                <button type="button" class="btn btn-secondary">Second</button>
                <button type="button" class="btn btn-secondary">Third</button>
            </div>
            <pre><code class="html">&lt;div class=&quot;btn-group-vertical&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;First&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Second&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Third&lt;/button&gt;
&lt;/div&gt;</code></pre>


            <h1>Button groups > Button Toolbar</h1>
            <hr>
            <div class="btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                <div class="btn-group mr-2" role="group" aria-label="First group">
                    <button type="button" class="btn btn-secondary">1</button>
                    <button type="button" class="btn btn-secondary">2</button>
                    <button type="button" class="btn btn-secondary">3</button>
                    <button type="button" class="btn btn-secondary">4</button>
                </div>
                <div class="btn-group mr-2" role="group" aria-label="Second group">
                    <button type="button" class="btn btn-secondary">5</button>
                    <button type="button" class="btn btn-secondary">6</button>
                    <button type="button" class="btn btn-secondary">7</button>
                </div>
                <div class="btn-group" role="group" aria-label="Third group">
                    <button type="button" class="btn btn-secondary">8</button>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;btn-toolbar&quot; role=&quot;toolbar&quot; aria-label=&quot;Toolbar with button groups&quot;&gt;
  &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;First group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;1&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;2&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;3&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;4&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group mr-2&quot; role=&quot;group&quot; aria-label=&quot;Second group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;5&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;6&lt;/button&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;7&lt;/button&gt;
  &lt;/div&gt;
  &lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Third group&quot;&gt;
    &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;8&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Button groups > Sizing</h1>
            <hr>
            <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
            </div>

            <br><br>

            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
            </div>

            <br><br>

            <div class="btn-group btn-group-lg" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary">Left</button>
                <button type="button" class="btn btn-secondary">Middle</button>
                <button type="button" class="btn btn-secondary">Right</button>
            </div>
            <pre><code class="html">&lt;div class=&quot;btn-group btn-group-sm&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;

&lt;br&gt;&lt;br&gt;

&lt;div class=&quot;btn-group btn-group-lg&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Left&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Middle&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;&gt;Right&lt;/button&gt;
&lt;/div&gt;</code></pre>


            <h1>Cards</h1>
            <hr>
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="http://via.placeholder.com/286x180" alt="Card image cap">

                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;card&quot; style=&quot;width: 18rem;&quot;&gt;
  &lt;img class=&quot;card-img-top&quot; src=&quot;http://via.placeholder.com/286x180&quot; alt=&quot;Card image cap&quot;&gt;

  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;btn btn-primary&quot;&gt;Go somewhere&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Cards (No Image)</h1>
            <hr>
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;card&quot; style=&quot;width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
    &lt;h6 class=&quot;card-subtitle mb-2 text-muted&quot;&gt;Card subtitle&lt;/h6&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Cards > Card styles</h1>
            <hr>
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Primary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Secondary card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Success card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Danger card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-warning mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Warning card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-info mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Info card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
                <div class="card-header">Header</div>
                <div class="card-body">
                    <h5 class="card-title">Dark card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                        the card's content.</p>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;card text-white bg-primary mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Primary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-secondary mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Secondary card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-success mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Success card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-danger mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Danger card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-warning mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Warning card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-info mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Info card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card bg-light mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Light card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;card text-white bg-dark mb-3&quot; style=&quot;max-width: 18rem;&quot;&gt;
  &lt;div class=&quot;card-header&quot;&gt;Header&lt;/div&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;Dark card title&lt;/h5&gt;
    &lt;p class=&quot;card-text&quot;&gt;Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Cards > Card decks</h1>
            <hr>
            <div class="card-deck">
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/400x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This content is a little bit longer.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/400x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This card has supporting text below as a natural lead-in to additional
                            content.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
                <div class="card">
                    <img class="card-img-top" src="http://via.placeholder.com/400x200" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                            additional content. This card has even longer content than the first to show that equal
                            height action.</p>
                        <p class="card-text">
                            <small class="text-muted">Last updated 3 mins ago</small>
                        </p>
                    </div>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;card-deck&quot;&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;http://via.placeholder.com/400x200&quot; alt=&quot;Card image cap&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;http://via.placeholder.com/400x200&quot; alt=&quot;Card image cap&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;This card has supporting text below as a natural lead-in to additional content.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;card&quot;&gt;
    &lt;img class=&quot;card-img-top&quot; src=&quot;http://via.placeholder.com/400x200&quot; alt=&quot;Card image cap&quot;&gt;
    &lt;div class=&quot;card-body&quot;&gt;
      &lt;h5 class=&quot;card-title&quot;&gt;Card title&lt;/h5&gt;
      &lt;p class=&quot;card-text&quot;&gt;This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.&lt;/p&gt;
      &lt;p class=&quot;card-text&quot;&gt;&lt;small class=&quot;text-muted&quot;&gt;Last updated 3 mins ago&lt;/small&gt;&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Collapse</h1>
            <hr>
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button"
                   aria-expanded="false" aria-controls="collapseExample">
                    Link with href
                </a>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample"
                        aria-expanded="false" aria-controls="collapseExample">
                    Button with data-target
                </button>
            </p>
            <div class="collapse" id="collapseExample">
                <div class="card card-body">
                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                    Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea
                    proident.
                </div>
            </div>
            <pre><code class="html">&lt;p&gt;
  &lt;a class=&quot;btn btn-primary&quot; data-toggle=&quot;collapse&quot; href=&quot;#collapseExample&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Link with href
  &lt;/a&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#collapseExample&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;collapseExample&quot;&gt;
    Button with data-target
  &lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;collapse&quot; id=&quot;collapseExample&quot;&gt;
  &lt;div class=&quot;card card-body&quot;&gt;
    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Collapse > Multiple targets</h1>
            <hr>
            <p>
                <a class="btn btn-primary" data-toggle="collapse" href="#multiCollapseExample1" role="button"
                   aria-expanded="false" aria-controls="multiCollapseExample1">Toggle first element</a>
                <button class="btn btn-primary" type="button" data-toggle="collapse"
                        data-target="#multiCollapseExample2" aria-expanded="false"
                        aria-controls="multiCollapseExample2">Toggle second element
                </button>
                <button class="btn btn-primary" type="button" data-toggle="collapse" data-target=".multi-collapse"
                        aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle
                    both elements
                </button>
            </p>
            <div class="row">
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident.
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="collapse multi-collapse" id="multiCollapseExample2">
                        <div class="card card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                            squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                            sapiente ea proident.
                        </div>
                    </div>
                </div>
            </div>
            <pre><code class="html">&lt;p&gt;
  &lt;a class=&quot;btn btn-primary&quot; data-toggle=&quot;collapse&quot; href=&quot;#multiCollapseExample1&quot; role=&quot;button&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1&quot;&gt;Toggle first element&lt;/a&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#multiCollapseExample2&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample2&quot;&gt;Toggle second element&lt;/button&gt;
  &lt;button class=&quot;btn btn-primary&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;.multi-collapse&quot; aria-expanded=&quot;false&quot; aria-controls=&quot;multiCollapseExample1 multiCollapseExample2&quot;&gt;Toggle both elements&lt;/button&gt;
&lt;/p&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample1&quot;&gt;
      &lt;div class=&quot;card card-body&quot;&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;col&quot;&gt;
    &lt;div class=&quot;collapse multi-collapse&quot; id=&quot;multiCollapseExample2&quot;&gt;
      &lt;div class=&quot;card card-body&quot;&gt;
        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident.
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Dropdowns</h1>
            <hr>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown button
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <br>

            <div class="dropdown">
                <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                   data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown link
                </a>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </div>

            <br>

            <div class="btn-group">
                <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                    Action
                </button>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <a class="dropdown-item" href="#">Something else here</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Separated link</a>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;dropdown&quot;&gt;
  &lt;button class=&quot;btn btn-secondary dropdown-toggle&quot; type=&quot;button&quot; id=&quot;dropdownMenuButton&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropdown button
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuButton&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;br&gt;

&lt;div class=&quot;dropdown&quot;&gt;
  &lt;a class=&quot;btn btn-secondary dropdown-toggle&quot; href=&quot;#&quot; role=&quot;button&quot; id=&quot;dropdownMenuLink&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Dropdown link
  &lt;/a&gt;

  &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;dropdownMenuLink&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;br&gt;

&lt;div class=&quot;btn-group&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-danger dropdown-toggle&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
    Action
  &lt;/button&gt;
  &lt;div class=&quot;dropdown-menu&quot;&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
    &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
    &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Forms</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                        else.
                    </small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            <pre><code class="html">&lt;form&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleInputEmail1&quot;&gt;Email address&lt;/label&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleInputEmail1&quot; aria-describedby=&quot;emailHelp&quot; placeholder=&quot;Enter email&quot;&gt;
    &lt;small id=&quot;emailHelp&quot; class=&quot;form-text text-muted&quot;&gt;We'll never share your email with anyone else.&lt;/small&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleInputPassword1&quot;&gt;Password&lt;/label&gt;
    &lt;input type=&quot;password&quot; class=&quot;form-control&quot; id=&quot;exampleInputPassword1&quot; placeholder=&quot;Password&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
    &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck1&quot;&gt;
    &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck1&quot;&gt;Check this custom checkbox&lt;/label&gt;
  &lt;/div&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-primary&quot;&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>


            <h1>Forms > Form controls</h1>
            <hr>
            <form>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Email address</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1"
                           placeholder="name@example.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                    <select class="form-control custom-select" id="exampleFormControlSelect1">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect2">Example multiple select</label>
                    <select multiple class="form-control custom-select" id="exampleFormControlSelect2">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Example textarea</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Example file input</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                </div>
            </form>
            <pre><code class="html">&lt;form&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleFormControlInput1&quot;&gt;Email address&lt;/label&gt;
    &lt;input type=&quot;email&quot; class=&quot;form-control&quot; id=&quot;exampleFormControlInput1&quot; placeholder=&quot;name@example.com&quot;&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleFormControlSelect1&quot;&gt;Example select&lt;/label&gt;
    &lt;select class=&quot;form-control custom-select&quot; id=&quot;exampleFormControlSelect1&quot;&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleFormControlSelect2&quot;&gt;Example multiple select&lt;/label&gt;
    &lt;select multiple class=&quot;form-control custom-select&quot; id=&quot;exampleFormControlSelect2&quot;&gt;
      &lt;option&gt;1&lt;/option&gt;
      &lt;option&gt;2&lt;/option&gt;
      &lt;option&gt;3&lt;/option&gt;
      &lt;option&gt;4&lt;/option&gt;
      &lt;option&gt;5&lt;/option&gt;
    &lt;/select&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleFormControlTextarea1&quot;&gt;Example textarea&lt;/label&gt;
    &lt;textarea class=&quot;form-control&quot; id=&quot;exampleFormControlTextarea1&quot; rows=&quot;3&quot;&gt;&lt;/textarea&gt;
  &lt;/div&gt;
  &lt;div class=&quot;form-group&quot;&gt;
    &lt;label for=&quot;exampleFormControlFile1&quot;&gt;Example file input&lt;/label&gt;
    &lt;input type=&quot;file&quot; class=&quot;form-control-file&quot; id=&quot;exampleFormControlFile1&quot;&gt;
  &lt;/div&gt;
&lt;/form&gt;</code></pre>


            <h1>Forms > Sizing</h1>
            <hr>
            <form>
                <div class="form-group"><input class="form-control form-control-sm" type="text"
                                               placeholder=".form-control-sm"></div>
                <div class="form-group"><input class="form-control" type="text" placeholder="Default input"></div>
                <div class="form-group"><input class="form-control form-control-lg" type="text"
                                               placeholder=".form-control-lg"></div>
            </form>
            <pre><code class="html">&lt;form&gt;
    &lt;div class=&quot;form-group&quot;&gt;&lt;input class=&quot;form-control form-control-sm&quot; type=&quot;text&quot; placeholder=&quot;.form-control-sm&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;&lt;input class=&quot;form-control&quot; type=&quot;text&quot; placeholder=&quot;Default input&quot;&gt;&lt;/div&gt;
    &lt;div class=&quot;form-group&quot;&gt;&lt;input class=&quot;form-control form-control-lg&quot; type=&quot;text&quot; placeholder=&quot;.form-control-lg&quot;&gt;&lt;/div&gt;
&lt;/form&gt;</code></pre>


            <h1>Forms > Custom Elements</h1>
            <hr>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="customCheck2">
                <label class="custom-control-label" for="customCheck1">Check this custom checkbox</label>
            </div>

            <br>

            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio1">Toggle this custom radio</label>
            </div>
            <div class="custom-control custom-radio">
                <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                <label class="custom-control-label" for="customRadio2">Or toggle this other custom radio</label>
            </div>

            <br>

            <select class="custom-select">
                <option selected>Open this select menu</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>

            <br><br>

            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile">
                <label class="custom-file-label" for="customFile">Choose file</label>
            </div>
            <pre><code class="html">&lt;div class=&quot;custom-control custom-checkbox&quot;&gt;
  &lt;input type=&quot;checkbox&quot; class=&quot;custom-control-input&quot; id=&quot;customCheck1&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customCheck1&quot;&gt;Check this custom checkbox&lt;/label&gt;
&lt;/div&gt;

&lt;br&gt;

&lt;div class=&quot;custom-control custom-radio&quot;&gt;
  &lt;input type=&quot;radio&quot; id=&quot;customRadio1&quot; name=&quot;customRadio&quot; class=&quot;custom-control-input&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio1&quot;&gt;Toggle this custom radio&lt;/label&gt;
&lt;/div&gt;
&lt;div class=&quot;custom-control custom-radio&quot;&gt;
  &lt;input type=&quot;radio&quot; id=&quot;customRadio2&quot; name=&quot;customRadio&quot; class=&quot;custom-control-input&quot;&gt;
  &lt;label class=&quot;custom-control-label&quot; for=&quot;customRadio2&quot;&gt;Or toggle this other custom radio&lt;/label&gt;
&lt;/div&gt;

&lt;br&gt;

&lt;select class=&quot;custom-select&quot;&gt;
  &lt;option selected&gt;Open this select menu&lt;/option&gt;
  &lt;option value=&quot;1&quot;&gt;One&lt;/option&gt;
  &lt;option value=&quot;2&quot;&gt;Two&lt;/option&gt;
  &lt;option value=&quot;3&quot;&gt;Three&lt;/option&gt;
&lt;/select&gt;

&lt;br&gt;&lt;br&gt;

&lt;div class=&quot;custom-file&quot;&gt;
  &lt;input type=&quot;file&quot; class=&quot;custom-file-input&quot; id=&quot;customFile&quot;&gt;
  &lt;label class=&quot;custom-file-label&quot; for=&quot;customFile&quot;&gt;Choose file&lt;/label&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group</h1>
            <hr>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">@</span>
                </div>
                <input type="text" class="form-control" placeholder="Username" aria-label="Username"
                       aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username"
                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <span class="input-group-text" id="basic-addon2">@example.com</span>
                </div>
            </div>

            <label for="basic-url">Your vanity URL</label>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon3">https://example.com/users/</span>
                </div>
                <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">.00</span>
                </div>
            </div>

            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text">With textarea</span>
                </div>
                <textarea class="form-control" aria-label="With textarea"></textarea>
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon1&quot;&gt;@&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Username&quot; aria-label=&quot;Username&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon2&quot;&gt;@example.com&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;label for=&quot;basic-url&quot;&gt;Your vanity URL&lt;/label&gt;
&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;basic-addon3&quot;&gt;https://example.com/users/&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; id=&quot;basic-url&quot; aria-describedby=&quot;basic-addon3&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;.00&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;With textarea&lt;/span&gt;
  &lt;/div&gt;
  &lt;textarea class=&quot;form-control&quot; aria-label=&quot;With textarea&quot;&gt;&lt;/textarea&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group > Sizing</h1>
            <hr>
            <div class="input-group input-group-sm mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-sm">Small</span>
                </div>
                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Default</span>
                </div>
                <input type="text" class="form-control" aria-label="Default"
                       aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group input-group-lg">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-lg">Large</span>
                </div>
                <input type="text" class="form-control" aria-label="Large" aria-describedby="inputGroup-sizing-sm">
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group input-group-sm mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-sm&quot;&gt;Small&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Small&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-default&quot;&gt;Default&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Default&quot; aria-describedby=&quot;inputGroup-sizing-default&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group input-group-lg&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;inputGroup-sizing-lg&quot;&gt;Large&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Large&quot; aria-describedby=&quot;inputGroup-sizing-sm&quot;&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group > Multiple inputs</h1>
            <hr>
            <div class="input-group">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="">First and last name</span>
                </div>
                <input type="text" class="form-control">
                <input type="text" class="form-control">
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot; id=&quot;&quot;&gt;First and last name&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot;&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group > Multiple addons</h1>
            <hr>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                </div>
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            </div>

            <div class="input-group">
                <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
                <div class="input-group-append">
                    <span class="input-group-text">$</span>
                    <span class="input-group-text">0.00</span>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Amount (to the nearest dollar)&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;$&lt;/span&gt;
    &lt;span class=&quot;input-group-text&quot;&gt;0.00&lt;/span&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group > Button addons</h1>
            <hr>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label=""
                       aria-describedby="basic-addon1">
            </div>

            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Recipient's username"
                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
                <input type="text" class="form-control" placeholder="" aria-label=""
                       aria-describedby="basic-addon1">
            </div>

            <div class="input-group">
                <input type="text" class="form-control" placeholder="Recipient's username"
                       aria-label="Recipient's username" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                    <button class="btn btn-outline-secondary" type="button">Button</button>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;&quot; aria-label=&quot;&quot; aria-describedby=&quot;basic-addon1&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; placeholder=&quot;Recipient's username&quot; aria-label=&quot;Recipient's username&quot; aria-describedby=&quot;basic-addon2&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
    &lt;button class=&quot;btn btn-outline-secondary&quot; type=&quot;button&quot;&gt;Button&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Input group > Buttons with dropdowns</h1>
            <hr>
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
            </div>

            <div class="input-group">
                <input type="text" class="form-control" aria-label="Text input with dropdown button">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropdown
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <div role="separator" class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>
                    </div>
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;input-group mb-3&quot;&gt;
  &lt;div class=&quot;input-group-prepend&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
&lt;/div&gt;

&lt;div class=&quot;input-group&quot;&gt;
  &lt;input type=&quot;text&quot; class=&quot;form-control&quot; aria-label=&quot;Text input with dropdown button&quot;&gt;
  &lt;div class=&quot;input-group-append&quot;&gt;
    &lt;button class=&quot;btn btn-outline-secondary dropdown-toggle&quot; type=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;Dropdown&lt;/button&gt;
    &lt;div class=&quot;dropdown-menu&quot;&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
      &lt;div role=&quot;separator&quot; class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
      &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Separated link&lt;/a&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>List group</h1>
            <hr>
            <ul class="list-group">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > Active items</h1>
            <hr>
            <ul class="list-group">
                <li class="list-group-item active">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item active&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > Disabled items</h1>
            <hr>
            <ul class="list-group">
                <li class="list-group-item disabled">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item disabled&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > Links and buttons</h1>
            <hr>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action active">Cras justo odio</a>
                <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                <a href="#" class="list-group-item list-group-item-action disabled">Vestibulum at eros</a>
            </div>
            <pre><code class="html">&lt;div class=&quot;list-group&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action active&quot;&gt;Cras justo odio&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Dapibus ac facilisis in&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Morbi leo risus&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action&quot;&gt;Porta ac consectetur ac&lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action disabled&quot;&gt;Vestibulum at eros&lt;/a&gt;
&lt;/div&gt;</code></pre>


            <h1>List group > Flush</h1>
            <hr>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Morbi leo risus</li>
                <li class="list-group-item">Porta ac consectetur ac</li>
                <li class="list-group-item">Vestibulum at eros</li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group list-group-flush&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Cras justo odio&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Morbi leo risus&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Porta ac consectetur ac&lt;/li&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Vestibulum at eros&lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > Contextual classes</h1>
            <hr>
            <ul class="list-group">
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item list-group-item-primary">A simple primary list group item</li>
                <li class="list-group-item list-group-item-secondary">A simple secondary list group item</li>
                <li class="list-group-item list-group-item-success">A simple success list group item</li>
                <li class="list-group-item list-group-item-danger">A simple danger list group item</li>
                <li class="list-group-item list-group-item-warning">A simple warning list group item</li>
                <li class="list-group-item list-group-item-info">A simple info list group item</li>
                <li class="list-group-item list-group-item-light">A simple light list group item</li>
                <li class="list-group-item list-group-item-dark">A simple dark list group item</li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item&quot;&gt;Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-primary&quot;&gt;A simple primary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-secondary&quot;&gt;A simple secondary list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-success&quot;&gt;A simple success list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-danger&quot;&gt;A simple danger list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-warning&quot;&gt;A simple warning list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-info&quot;&gt;A simple info list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-light&quot;&gt;A simple light list group item&lt;/li&gt;
  &lt;li class=&quot;list-group-item list-group-item-dark&quot;&gt;A simple dark list group item&lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > With badges</h1>
            <hr>
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Cras justo odio
                    <span class="badge badge-primary badge-pill">14</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Dapibus ac facilisis in
                    <span class="badge badge-primary badge-pill">2</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    Morbi leo risus
                    <span class="badge badge-primary badge-pill">1</span>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;list-group&quot;&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
    Cras justo odio
    &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;14&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
    Dapibus ac facilisis in
    &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;2&lt;/span&gt;
  &lt;/li&gt;
  &lt;li class=&quot;list-group-item d-flex justify-content-between align-items-center&quot;&gt;
    Morbi leo risus
    &lt;span class=&quot;badge badge-primary badge-pill&quot;&gt;1&lt;/span&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>List group > Custom content</h1>
            <hr>
            <div class="list-group">
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start active">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small>3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small>Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
                <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                    <div class="d-flex w-100 justify-content-between">
                        <h5 class="mb-1">List group item heading</h5>
                        <small class="text-muted">3 days ago</small>
                    </div>
                    <p class="mb-1">Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus
                        varius blandit.</p>
                    <small class="text-muted">Donec id elit non mi porta.</small>
                </a>
            </div>
            <pre><code class="html">&lt;div class=&quot;list-group&quot;&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start active&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
      &lt;small&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
      &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
  &lt;a href=&quot;#&quot; class=&quot;list-group-item list-group-item-action flex-column align-items-start&quot;&gt;
    &lt;div class=&quot;d-flex w-100 justify-content-between&quot;&gt;
      &lt;h5 class=&quot;mb-1&quot;&gt;List group item heading&lt;/h5&gt;
      &lt;small class=&quot;text-muted&quot;&gt;3 days ago&lt;/small&gt;
    &lt;/div&gt;
    &lt;p class=&quot;mb-1&quot;&gt;Donec id elit non mi porta gravida at eget metus. Maecenas sed diam eget risus varius blandit.&lt;/p&gt;
    &lt;small class=&quot;text-muted&quot;&gt;Donec id elit non mi porta.&lt;/small&gt;
  &lt;/a&gt;
&lt;/div&gt;</code></pre>


            <h1>Modal > Live Demo</h1>
            <hr><!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <pre><code class="html">&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModal&quot;&gt;
  Launch demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModal&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalLabel&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalLabel&quot;&gt;Modal title&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
          &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        ...
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Modal > Vertically centered</h1>
            <hr><!-- Button trigger modal -->
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                 aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
            <pre><code class="html">&lt;!-- Button trigger modal --&gt;
&lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot; data-toggle=&quot;modal&quot; data-target=&quot;#exampleModalCenter&quot;&gt;
  Launch demo modal
&lt;/button&gt;

&lt;!-- Modal --&gt;
&lt;div class=&quot;modal fade&quot; id=&quot;exampleModalCenter&quot; tabindex=&quot;-1&quot; role=&quot;dialog&quot; aria-labelledby=&quot;exampleModalCenterTitle&quot; aria-hidden=&quot;true&quot;&gt;
  &lt;div class=&quot;modal-dialog modal-dialog-centered&quot; role=&quot;document&quot;&gt;
    &lt;div class=&quot;modal-content&quot;&gt;
      &lt;div class=&quot;modal-header&quot;&gt;
        &lt;h5 class=&quot;modal-title&quot; id=&quot;exampleModalCenterTitle&quot;&gt;Modal title&lt;/h5&gt;
        &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;modal&quot; aria-label=&quot;Close&quot;&gt;
          &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
        &lt;/button&gt;
      &lt;/div&gt;
      &lt;div class=&quot;modal-body&quot;&gt;
        ...
      &lt;/div&gt;
      &lt;div class=&quot;modal-footer&quot;&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-dismiss=&quot;modal&quot;&gt;Close&lt;/button&gt;
        &lt;button type=&quot;button&quot; class=&quot;btn btn-primary&quot;&gt;Save changes&lt;/button&gt;
      &lt;/div&gt;
    &lt;/div&gt;
  &lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Navs</h1>
            <hr>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;nav&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>Navs > Vertical</h1>
            <hr>
            <ul class="nav flex-column">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;nav flex-column&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>Navs > Tabs</h1>
            <hr>
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;nav nav-tabs&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>Navs > Pills</h1>
            <hr>
            <ul class="nav nav-pills">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;nav nav-pills&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>Navs > Fill and justify</h1>
            <hr>
            <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Longer nav link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <pre><code class="html">&lt;ul class=&quot;nav nav-pills nav-fill&quot;&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link active&quot; href=&quot;#&quot;&gt;Active&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Longer nav link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
  &lt;/li&gt;
  &lt;li class=&quot;nav-item&quot;&gt;
    &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
  &lt;/li&gt;
&lt;/ul&gt;</code></pre>


            <h1>Navbar</h1>
            <hr>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <pre><code class="html">&lt;nav class=&quot;navbar navbar-expand-lg navbar-light bg-light&quot;&gt;
  &lt;a class=&quot;navbar-brand&quot; href=&quot;#&quot;&gt;Navbar&lt;/a&gt;
  &lt;button class=&quot;navbar-toggler&quot; type=&quot;button&quot; data-toggle=&quot;collapse&quot; data-target=&quot;#navbarSupportedContent&quot; aria-controls=&quot;navbarSupportedContent&quot; aria-expanded=&quot;false&quot; aria-label=&quot;Toggle navigation&quot;&gt;
    &lt;span class=&quot;navbar-toggler-icon&quot;&gt;&lt;/span&gt;
  &lt;/button&gt;

  &lt;div class=&quot;collapse navbar-collapse&quot; id=&quot;navbarSupportedContent&quot;&gt;
    &lt;ul class=&quot;navbar-nav mr-auto&quot;&gt;
      &lt;li class=&quot;nav-item active&quot;&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Home &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link&quot; href=&quot;#&quot;&gt;Link&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item dropdown&quot;&gt;
        &lt;a class=&quot;nav-link dropdown-toggle&quot; href=&quot;#&quot; id=&quot;navbarDropdown&quot; role=&quot;button&quot; data-toggle=&quot;dropdown&quot; aria-haspopup=&quot;true&quot; aria-expanded=&quot;false&quot;&gt;
          Dropdown
        &lt;/a&gt;
        &lt;div class=&quot;dropdown-menu&quot; aria-labelledby=&quot;navbarDropdown&quot;&gt;
          &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Action&lt;/a&gt;
          &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Another action&lt;/a&gt;
          &lt;div class=&quot;dropdown-divider&quot;&gt;&lt;/div&gt;
          &lt;a class=&quot;dropdown-item&quot; href=&quot;#&quot;&gt;Something else here&lt;/a&gt;
        &lt;/div&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link disabled&quot; href=&quot;#&quot;&gt;Disabled&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
    &lt;form class=&quot;form-inline my-2 my-lg-0&quot;&gt;
      &lt;input class=&quot;form-control mr-sm-2&quot; type=&quot;search&quot; placeholder=&quot;Search&quot; aria-label=&quot;Search&quot;&gt;
      &lt;button class=&quot;btn btn-outline-success my-2 my-sm-0&quot; type=&quot;submit&quot;&gt;Search&lt;/button&gt;
    &lt;/form&gt;
  &lt;/div&gt;
&lt;/nav&gt;</code></pre>


            <h1>Navbar > Color schemes</h1>
            <hr>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark mt-1">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary mt-2">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <nav class="navbar navbar-expand-lg navbar-light mt-2" style="background-color: #e3f2fd;">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                               data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" href="#">Disabled</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>
            <pre><code class="html">&lt;nav class=&quot;navbar navbar-dark bg-dark&quot;&gt;
  &lt;!-- Navbar content --&gt;
&lt;/nav&gt;

&lt;nav class=&quot;navbar navbar-dark bg-primary&quot;&gt;
  &lt;!-- Navbar content --&gt;
&lt;/nav&gt;

&lt;nav class=&quot;navbar navbar-light&quot; style=&quot;background-color: #e3f2fd;&quot;&gt;
  &lt;!-- Navbar content --&gt;
&lt;/nav&gt;</code></pre>


            <h1>Pagination</h1>
            <hr>
            <nav aria-label="Page navigation example">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <pre><code class="html">&lt;nav aria-label=&quot;Page navigation example&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>


            <h1>Pagination > Disabled and active states</h1>
            <hr>
            <nav aria-label="...">
                <ul class="pagination">
                    <li class="page-item disabled"><a class="page-link" href="#" tabindex="-1">Previous</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active"><a class="page-link" href="#">2 <span
                                class="sr-only">(current)</span></a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </nav>
            <pre><code class="html">&lt;nav aria-label=&quot;...&quot;&gt;
  &lt;ul class=&quot;pagination&quot;&gt;
    &lt;li class=&quot;page-item disabled&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot; tabindex=&quot;-1&quot;&gt;Previous&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2 &lt;span class=&quot;sr-only&quot;&gt;(current)&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;Next&lt;/a&gt;&lt;/li&gt;
  &lt;/ul&gt;
&lt;/nav&gt;</code></pre>


            <h1>Progress</h1>
            <hr>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                     aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0"
                     aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                     aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0"
                     aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;0&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Progress > Labels</h1>
            <hr>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100">25%
                </div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;25%&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Progress > Height</h1>
            <hr>
            <div class="progress" style="height: 1px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress" style="height: 20px;">
                <div class="progress-bar" role="progressbar" style="width: 25%;" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot; style=&quot;height: 1px;&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot; style=&quot;height: 20px;&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 25%;&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Progress > Backgrounds</h1>
            <hr>
            <div class="progress">
                <div class="progress-bar bg-success" role="progressbar" style="width: 25%" aria-valuenow="25"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-info" role="progressbar" style="width: 50%" aria-valuenow="50"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 75%" aria-valuenow="75"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar bg-danger" role="progressbar" style="width: 100%" aria-valuenow="100"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Progress > Multiple bars</h1>
            <hr>
            <div class="progress">
                <div class="progress-bar" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0"
                     aria-valuemax="100"></div>
                <div class="progress-bar bg-success" role="progressbar" style="width: 30%" aria-valuenow="30"
                     aria-valuemin="0" aria-valuemax="100"></div>
                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20"
                     aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar&quot; role=&quot;progressbar&quot; style=&quot;width: 15%&quot; aria-valuenow=&quot;15&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;progress-bar bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 30%&quot; aria-valuenow=&quot;30&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
  &lt;div class=&quot;progress-bar bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 20%&quot; aria-valuenow=&quot;20&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Progress > Striped</h1>
            <hr>
            <div class="progress">
                <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 10%"
                     aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: 25%"
                     aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-info" role="progressbar" style="width: 50%"
                     aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: 75%"
                     aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-danger" role="progressbar" style="width: 100%"
                     aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
            <pre><code class="html">&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped&quot; role=&quot;progressbar&quot; style=&quot;width: 10%&quot; aria-valuenow=&quot;10&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-success&quot; role=&quot;progressbar&quot; style=&quot;width: 25%&quot; aria-valuenow=&quot;25&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-info&quot; role=&quot;progressbar&quot; style=&quot;width: 50%&quot; aria-valuenow=&quot;50&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-warning&quot; role=&quot;progressbar&quot; style=&quot;width: 75%&quot; aria-valuenow=&quot;75&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;
&lt;div class=&quot;progress&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped bg-danger&quot; role=&quot;progressbar&quot; style=&quot;width: 100%&quot; aria-valuenow=&quot;100&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Close icon</h1>
            <hr>
            <div class="clearfix">
                <button type="button" class="close" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <pre><code class="html">&lt;div class=&quot;clearfix&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
  &lt;/button&gt;
&lt;/div&gt;</code></pre>


            <h1>Colors</h1>
            <hr>
            <p class="text-primary">.text-primary</p>
            <p class="text-secondary">.text-secondary</p>
            <p class="text-success">.text-success</p>
            <p class="text-danger">.text-danger</p>
            <p class="text-warning">.text-warning</p>
            <p class="text-info">.text-info</p>
            <p class="text-light bg-dark">.text-light</p>
            <p class="text-dark">.text-dark</p>
            <p class="text-body">.text-body</p>
            <p class="text-muted">.text-muted</p>
            <p class="text-white bg-dark">.text-white</p>
            <p class="text-black-50">.text-black-50</p>
            <p class="text-white-50 bg-dark">.text-white-50</p>
            <pre><code class="html">&lt;p class=&quot;text-primary&quot;&gt;.text-primary&lt;/p&gt;
&lt;p class=&quot;text-secondary&quot;&gt;.text-secondary&lt;/p&gt;
&lt;p class=&quot;text-success&quot;&gt;.text-success&lt;/p&gt;
&lt;p class=&quot;text-danger&quot;&gt;.text-danger&lt;/p&gt;
&lt;p class=&quot;text-warning&quot;&gt;.text-warning&lt;/p&gt;
&lt;p class=&quot;text-info&quot;&gt;.text-info&lt;/p&gt;
&lt;p class=&quot;text-light bg-dark&quot;&gt;.text-light&lt;/p&gt;
&lt;p class=&quot;text-dark&quot;&gt;.text-dark&lt;/p&gt;
&lt;p class=&quot;text-body&quot;&gt;.text-body&lt;/p&gt;
&lt;p class=&quot;text-muted&quot;&gt;.text-muted&lt;/p&gt;
&lt;p class=&quot;text-white bg-dark&quot;&gt;.text-white&lt;/p&gt;
&lt;p class=&quot;text-black-50&quot;&gt;.text-black-50&lt;/p&gt;
&lt;p class=&quot;text-white-50 bg-dark&quot;&gt;.text-white-50&lt;/p&gt;</code></pre>
            <p><a href="#" class="text-primary">Primary link</a></p>
            <p><a href="#" class="text-secondary">Secondary link</a></p>
            <p><a href="#" class="text-success">Success link</a></p>
            <p><a href="#" class="text-danger">Danger link</a></p>
            <p><a href="#" class="text-warning">Warning link</a></p>
            <p><a href="#" class="text-info">Info link</a></p>
            <p><a href="#" class="text-light bg-dark">Light link</a></p>
            <p><a href="#" class="text-dark">Dark link</a></p>
            <p><a href="#" class="text-muted">Muted link</a></p>
            <p><a href="#" class="text-white bg-dark">White link</a></p>
            <pre><code class="html">&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-primary&quot;&gt;Primary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-secondary&quot;&gt;Secondary link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-success&quot;&gt;Success link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-danger&quot;&gt;Danger link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-warning&quot;&gt;Warning link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-info&quot;&gt;Info link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-light bg-dark&quot;&gt;Light link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-dark&quot;&gt;Dark link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-muted&quot;&gt;Muted link&lt;/a&gt;&lt;/p&gt;
&lt;p&gt;&lt;a href=&quot;#&quot; class=&quot;text-white bg-dark&quot;&gt;White link&lt;/a&gt;&lt;/p&gt;</code></pre>


            <h1>Colors > Background color</h1>
            <hr>
            <div class="p-3 mb-2 bg-primary text-white">.bg-primary</div>
            <div class="p-3 mb-2 bg-secondary text-white">.bg-secondary</div>
            <div class="p-3 mb-2 bg-success text-white">.bg-success</div>
            <div class="p-3 mb-2 bg-danger text-white">.bg-danger</div>
            <div class="p-3 mb-2 bg-warning text-dark">.bg-warning</div>
            <div class="p-3 mb-2 bg-info text-white">.bg-info</div>
            <div class="p-3 mb-2 bg-light text-dark">.bg-light</div>
            <div class="p-3 mb-2 bg-dark text-white">.bg-dark</div>
            <div class="p-3 mb-2 bg-white text-dark">.bg-white</div>
            <div class="p-3 mb-2 bg-transparent text-dark">.bg-transparent</div>
            <pre><code class="html">&lt;div class=&quot;p-3 mb-2 bg-primary text-white&quot;&gt;.bg-primary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-secondary text-white&quot;&gt;.bg-secondary&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-success text-white&quot;&gt;.bg-success&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-danger text-white&quot;&gt;.bg-danger&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-warning text-dark&quot;&gt;.bg-warning&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-info text-white&quot;&gt;.bg-info&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-light text-dark&quot;&gt;.bg-light&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-dark text-white&quot;&gt;.bg-dark&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-white text-dark&quot;&gt;.bg-white&lt;/div&gt;
&lt;div class=&quot;p-3 mb-2 bg-transparent text-dark&quot;&gt;.bg-transparent&lt;/div&gt;</code></pre>


            <h1>Shadows</h1>
            <hr>
            <div class="shadow-none p-3 mb-5 bg-light rounded">No shadow</div>
            <div class="shadow-sm p-3 mb-5 bg-white rounded">Small shadow</div>
            <div class="shadow p-3 mb-5 bg-white rounded">Regular shadow</div>
            <div class="shadow-lg p-3 mb-5 bg-white rounded">Larger shadow</div>
            <pre><code class="html">&lt;div class=&quot;shadow-none p-3 mb-5 bg-light rounded&quot;&gt;No shadow&lt;/div&gt;
&lt;div class=&quot;shadow-sm p-3 mb-5 bg-white rounded&quot;&gt;Small shadow&lt;/div&gt;
&lt;div class=&quot;shadow p-3 mb-5 bg-white rounded&quot;&gt;Regular shadow&lt;/div&gt;
&lt;div class=&quot;shadow-lg p-3 mb-5 bg-white rounded&quot;&gt;Larger shadow&lt;/div&gt;</code></pre>


            <h1>Sizing</h1>
            <hr>
            <div class="w-25 p-3" style="background-color: #eee;">Width 25%</div>
            <div class="w-50 p-3" style="background-color: #eee;">Width 50%</div>
            <div class="w-75 p-3" style="background-color: #eee;">Width 75%</div>
            <div class="w-100 p-3" style="background-color: #eee;">Width 100%</div>
            <div class="w-auto p-3" style="background-color: #eee;">Width auto</div>
            <pre><code class="html">&lt;div class=&quot;w-25 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 25%&lt;/div&gt;
&lt;div class=&quot;w-50 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 50%&lt;/div&gt;
&lt;div class=&quot;w-75 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 75%&lt;/div&gt;
&lt;div class=&quot;w-100 p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width 100%&lt;/div&gt;
&lt;div class=&quot;w-auto p-3&quot; style=&quot;background-color: #eee;&quot;&gt;Width auto&lt;/div&gt;</code></pre>
            <div style="height: 100px; background-color: rgba(255,0,0,0.1);">
                <div class="h-25 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height
                    25%
                </div>
                <div class="h-50 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height
                    50%
                </div>
                <div class="h-75 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height
                    75%
                </div>
                <div class="h-100 d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height
                    100%
                </div>
                <div class="h-auto d-inline-block" style="width: 120px; background-color: rgba(0,0,255,.1)">Height
                    auto
                </div>
            </div>
            <pre><code class="html">&lt;div style=&quot;height: 100px; background-color: rgba(255,0,0,0.1);&quot;&gt;
  &lt;div class=&quot;h-25 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 25%&lt;/div&gt;
  &lt;div class=&quot;h-50 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 50%&lt;/div&gt;
  &lt;div class=&quot;h-75 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 75%&lt;/div&gt;
  &lt;div class=&quot;h-100 d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height 100%&lt;/div&gt;
  &lt;div class=&quot;h-auto d-inline-block&quot; style=&quot;width: 120px; background-color: rgba(0,0,255,.1)&quot;&gt;Height auto&lt;/div&gt;
&lt;/div&gt;</code></pre>


            <h1>Spacing Notation</h1>

            <p>Spacing utilities that apply to all breakpoints, from <code class="highlighter-rouge">xs</code> to
                <code class="highlighter-rouge">xl</code>, have no breakpoint abbreviation in them. This is because
                those classes are applied from <code class="highlighter-rouge">min-width: 0</code> and up, and thus
                are not bound by a media query. The remaining breakpoints, however, do include a breakpoint
                abbreviation.</p>
            <p>The classes are named using the format <code
                    class="highlighter-rouge">{property}{sides}-{size}</code> for <code
                    class="highlighter-rouge">xs</code> and <code class="highlighter-rouge">{property}{sides}-{breakpoint}-{size}</code>
                for <code class="highlighter-rouge">sm</code>, <code class="highlighter-rouge">md</code>, <code
                    class="highlighter-rouge">lg</code>, and <code class="highlighter-rouge">xl</code>.</p>
            <p>Where <em>property</em> is one of:</p>
            <ul>
                <li><code class="highlighter-rouge">m</code> - for classes that set <code class="highlighter-rouge">margin</code>
                </li>
                <li><code class="highlighter-rouge">p</code> - for classes that set <code class="highlighter-rouge">padding</code>
                </li>
            </ul>
            <p>Where <em>sides</em> is one of:</p>
            <ul>
                <li><code class="highlighter-rouge">t</code> - for classes that set <code class="highlighter-rouge">margin-top</code>
                    or <code class="highlighter-rouge">padding-top</code></li>
                <li><code class="highlighter-rouge">b</code> - for classes that set <code class="highlighter-rouge">margin-bottom</code>
                    or <code class="highlighter-rouge">padding-bottom</code></li>
                <li><code class="highlighter-rouge">l</code> - for classes that set <code class="highlighter-rouge">margin-left</code>
                    or <code class="highlighter-rouge">padding-left</code></li>
                <li><code class="highlighter-rouge">r</code> - for classes that set <code class="highlighter-rouge">margin-right</code>
                    or <code class="highlighter-rouge">padding-right</code></li>
                <li><code class="highlighter-rouge">x</code> - for classes that set both <code
                        class="highlighter-rouge">*-left</code> and <code class="highlighter-rouge">*-right</code>
                </li>
                <li><code class="highlighter-rouge">y</code> - for classes that set both <code
                        class="highlighter-rouge">*-top</code> and <code class="highlighter-rouge">*-bottom</code>
                </li>
                <li>blank - for classes that set a <code class="highlighter-rouge">margin</code> or <code
                        class="highlighter-rouge">padding</code> on all 4 sides of the element
                </li>
            </ul>
            <p>Where <em>size</em> is one of:</p>
            <ul>
                <li><code class="highlighter-rouge">0</code> - for classes that eliminate the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> by
                    setting it to <code class="highlighter-rouge">0</code></li>
                <li><code class="highlighter-rouge">1</code> - (by default) for classes that set the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                    <code class="highlighter-rouge">$spacer * .25</code></li>
                <li><code class="highlighter-rouge">2</code> - (by default) for classes that set the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                    <code class="highlighter-rouge">$spacer * .5</code></li>
                <li><code class="highlighter-rouge">3</code> - (by default) for classes that set the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                    <code class="highlighter-rouge">$spacer</code></li>
                <li><code class="highlighter-rouge">4</code> - (by default) for classes that set the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                    <code class="highlighter-rouge">$spacer * 1.5</code></li>
                <li><code class="highlighter-rouge">5</code> - (by default) for classes that set the <code
                        class="highlighter-rouge">margin</code> or <code class="highlighter-rouge">padding</code> to
                    <code class="highlighter-rouge">$spacer * 3</code></li>
                <li><code class="highlighter-rouge">auto</code> - for classes that set the <code
                        class="highlighter-rouge">margin</code> to auto
                </li>
            </ul>
            <h1>Text alignment</h1>
            <hr>
            <p class="text-justify">Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet
                fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex
                communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in
                diem certam indicere. Cras mattis iudicium purus sit amet fermentum.</p>
            <pre><code class="html">&lt;p class=&quot;text-justify&quot;&gt;Ambitioni dedisse scripsisse iudicaretur. Cras mattis iudicium purus sit amet fermentum. Donec sed odio operae, eu vulputate felis rhoncus. Praeterea iter est quasdam res quas ex communi. At nos hinc posthac, sitientis piros Afros. Petierunt uti sibi concilium totius Galliae in diem certam indicere. Cras mattis iudicium purus sit amet fermentum.&lt;/p&gt;</code></pre>
            <p class="text-left">Left aligned text on all viewport sizes.</p>
            <p class="text-center">Center aligned text on all viewport sizes.</p>
            <p class="text-right">Right aligned text on all viewport sizes.</p>

            <p class="text-sm-left">Left aligned text on viewports sized SM (small) or wider.</p>
            <p class="text-md-left">Left aligned text on viewports sized MD (medium) or wider.</p>
            <p class="text-lg-left">Left aligned text on viewports sized LG (large) or wider.</p>
            <p class="text-xl-left">Left aligned text on viewports sized XL (extra-large) or wider.</p>
            <pre><code class="html">&lt;p class=&quot;text-left&quot;&gt;Left aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-center&quot;&gt;Center aligned text on all viewport sizes.&lt;/p&gt;
&lt;p class=&quot;text-right&quot;&gt;Right aligned text on all viewport sizes.&lt;/p&gt;

&lt;p class=&quot;text-sm-left&quot;&gt;Left aligned text on viewports sized SM (small) or wider.&lt;/p&gt;
&lt;p class=&quot;text-md-left&quot;&gt;Left aligned text on viewports sized MD (medium) or wider.&lt;/p&gt;
&lt;p class=&quot;text-lg-left&quot;&gt;Left aligned text on viewports sized LG (large) or wider.&lt;/p&gt;
&lt;p class=&quot;text-xl-left&quot;&gt;Left aligned text on viewports sized XL (extra-large) or wider.&lt;/p&gt;</code></pre>


            <h1>Text wrapping and overflow</h1>
            <hr><!-- Block level -->
            <div class="row">
                <div class="col-2 text-truncate">
                    Praeterea iter est quasdam res quas ex communi.
                </div>
            </div>

            <!-- Inline level -->
            <span class="d-inline-block text-truncate" style="max-width: 150px;">
  Praeterea iter est quasdam res quas ex communi.
</span>
            <pre><code class="html">&lt;!-- Block level --&gt;
&lt;div class=&quot;row&quot;&gt;
  &lt;div class=&quot;col-2 text-truncate&quot;&gt;
    Praeterea iter est quasdam res quas ex communi.
  &lt;/div&gt;
&lt;/div&gt;

&lt;!-- Inline level --&gt;
&lt;span class=&quot;d-inline-block text-truncate&quot; style=&quot;max-width: 150px;&quot;&gt;
  Praeterea iter est quasdam res quas ex communi.
&lt;/span&gt;</code></pre>


            <h1>Text transform</h1>
            <hr>
            <p class="text-lowercase">Lowercased text.</p>
            <p class="text-uppercase">Uppercased text.</p>
            <p class="text-capitalize">CapiTaliZed text.</p>
            <pre><code class="html">&lt;p class=&quot;text-lowercase&quot;&gt;Lowercased text.&lt;/p&gt;
&lt;p class=&quot;text-uppercase&quot;&gt;Uppercased text.&lt;/p&gt;
&lt;p class=&quot;text-capitalize&quot;&gt;CapiTaliZed text.&lt;/p&gt;</code></pre>


            <h1>Font weight and italics</h1>
            <hr>
            <p class="font-weight-bold">Bold text.</p>
            <p class="font-weight-normal">Normal weight text.</p>
            <p class="font-weight-light">Light weight text.</p>
            <p class="font-italic">Italic text.</p>
            <pre><code class="html">&lt;p class=&quot;font-weight-bold&quot;&gt;Bold text.&lt;/p&gt;
&lt;p class=&quot;font-weight-normal&quot;&gt;Normal weight text.&lt;/p&gt;
&lt;p class=&quot;font-weight-light&quot;&gt;Light weight text.&lt;/p&gt;
&lt;p class=&quot;font-italic&quot;&gt;Italic text.&lt;/p&gt;</code></pre>


            <h1>Vertical alignment</h1>
            <hr>
            <span class="align-baseline">baseline</span>
            <span class="align-top">top</span>
            <span class="align-middle">middle</span>
            <span class="align-bottom">bottom</span>
            <span class="align-text-top">text-top</span>
            <span class="align-text-bottom">text-bottom</span>
            <pre><code class="html">&lt;span class=&quot;align-baseline&quot;&gt;baseline&lt;/span&gt;
&lt;span class=&quot;align-top&quot;&gt;top&lt;/span&gt;
&lt;span class=&quot;align-middle&quot;&gt;middle&lt;/span&gt;
&lt;span class=&quot;align-bottom&quot;&gt;bottom&lt;/span&gt;
&lt;span class=&quot;align-text-top&quot;&gt;text-top&lt;/span&gt;
&lt;span class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/span&gt;</code></pre>
            <table style="height: 100px;">
                <tbody>
                <tr>
                    <td class="align-baseline">baseline</td>
                    <td class="align-top">top</td>
                    <td class="align-middle">middle</td>
                    <td class="align-bottom">bottom</td>
                    <td class="align-text-top">text-top</td>
                    <td class="align-text-bottom">text-bottom</td>
                </tr>
                </tbody>
            </table>
            <pre><code class="html">&lt;table style=&quot;height: 100px;&quot;&gt;
  &lt;tbody&gt;
    &lt;tr&gt;
      &lt;td class=&quot;align-baseline&quot;&gt;baseline&lt;/td&gt;
      &lt;td class=&quot;align-top&quot;&gt;top&lt;/td&gt;
      &lt;td class=&quot;align-middle&quot;&gt;middle&lt;/td&gt;
      &lt;td class=&quot;align-bottom&quot;&gt;bottom&lt;/td&gt;
      &lt;td class=&quot;align-text-top&quot;&gt;text-top&lt;/td&gt;
      &lt;td class=&quot;align-text-bottom&quot;&gt;text-bottom&lt;/td&gt;
    &lt;/tr&gt;
  &lt;/tbody&gt;
&lt;/table&gt;</code></pre>

            <hr>

            <div class="alert alert-info" role="alert">
                Note: this is intended to be used as a quick overview/reference. Visit <a
                    href="https://getbootstrap.com/docs/">https://getbootstrap.com/docs/</a> for full documentation!
            </div>
        </div>
    </div>
@endsection
