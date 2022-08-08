
        <section class="formulaire">
            <h1>Edit article</h1>
            <form>
                <div>
                    <label for="title">Your title </label>
                </div>
                <div>
                    <input class="title" type="title" id="title" name="title" value="$POST->title" placeholder="Title">
                </div>
                <div>
                    <label for="addimage">Add an image </label>
                </div>
                <div>
                    <input class="addimage" type="file" id="addimage" name="addimage">
                </div>
                <div>
                    <label for="text">Text</label>
                </div>
                <textarea name="comment" rows="12" cols="35" value="add your text here">add your text here</textarea>
                <div>
                    <input class="publisharticle" type="submit" name="publisharticle" id="publisharticle" value="PUBLISH">
                </div>
            </form>
        </section>
   
